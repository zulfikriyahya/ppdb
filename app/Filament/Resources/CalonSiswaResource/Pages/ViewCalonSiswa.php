<?php

namespace App\Filament\Resources\CalonSiswaResource\Pages;

use App\Filament\Resources\CalonSiswaResource;
use App\Filament\Traits\CalonSiswaFormTrait;
use App\Models\CalonSiswa;
use Carbon\Carbon;
use Filament\Forms\Components\Wizard;
use Filament\Forms\Form;
use Filament\Resources\Pages\ViewRecord;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Torgodly\Html2Media\Actions\Html2MediaAction;

class ViewCalonSiswa extends ViewRecord
{
    use CalonSiswaFormTrait;

    protected static string $resource = CalonSiswaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            $this->buildPdfAction(
                name: 'cetak_formulir',
                label: 'Formulir',
                view: 'formulir',
                visibleCallback: fn () => $this->canPrintFormulir()
            ),
            $this->buildPdfAction(
                name: 'cetak_kartu_tes',
                label: 'Kartu Tes',
                view: 'kartu-tes',
                visibleCallback: fn () => $this->canPrintKartuTes()
            ),
            $this->buildPdfAction(
                name: 'cetak_skl',
                label: 'Hasil',
                view: 'skl',
                visibleCallback: fn () => $this->canPrintHasil()
            ),
        ];
    }

    public function form(Form $form): Form
    {
        return $form->schema([
            Wizard::make($this->getAllSteps(
                includeStatusSection: true,
                includeDataTes: false
            ))->columnSpanFull(),
        ]);
    }

    // ========================================================================
    // PDF ACTION BUILDER
    // ========================================================================

    private function buildPdfAction(
        string $name,
        string $label,
        string $view,
        callable $visibleCallback
    ): Html2MediaAction {
        return Html2MediaAction::make($name)
            ->label($label)
            ->outlined()
            ->icon('heroicon-o-printer')
            ->filename(fn ($record) => "{$label}_{$record->nama}_{$record->nisn}.pdf")
            ->savePdf()
            ->orientation('portrait')
            ->format('a4', 'mm')
            ->enableLinks()
            ->margin([10, 10, 10, 10])
            ->content(fn ($record) => view($view, ['record' => $record]))
            ->visible($visibleCallback);
    }

    // ========================================================================
    // VISIBILITY RULES
    // ========================================================================

    private function getCalonSiswa(): ?CalonSiswa
    {
        return CalonSiswa::where('nisn', Auth::user()->username)->first();
    }

    private function canPrintFormulir(): bool
    {
        $calonSiswa = $this->getCalonSiswa();
        if (! $calonSiswa) {
            return false;
        }

        return ! in_array($calonSiswa->status_pendaftaran, [
            'Diproses',
            'Tidak Diterima',
            'Berkas Tidak Lengkap',
        ]);
    }

    private function canPrintKartuTes(): bool
    {
        $calonSiswa = $this->getCalonSiswa();
        if (! $calonSiswa) {
            return false;
        }

        if (in_array($calonSiswa->status_pendaftaran, [
            'Diproses',
            'Tidak Diterima',
            'Berkas Tidak Lengkap',
            'Diterima Di Kelas Reguler',
            'Diterima Di Kelas Unggulan',
        ])) {
            return false;
        }

        return $this->isWithinKartuTesPeriod();
    }

    private function canPrintHasil(): bool
    {
        $calonSiswa = $this->getCalonSiswa();
        if (! $calonSiswa) {
            return false;
        }

        if (in_array($calonSiswa->status_pendaftaran, [
            'Diproses',
            'Diverifikasi',
            'Berkas Tidak Lengkap',
        ])) {
            return false;
        }

        return $this->isWithinPengumumanPeriod();
    }

    // ========================================================================
    // DATE RANGE HELPERS
    // ========================================================================

    private function getActiveTahunPendaftaran(): ?object
    {
        return DB::table('tahun_pendaftarans')->where('status', 'Aktif')->first();
    }

    private function isWithinKartuTesPeriod(): bool
    {
        $tahun = $this->getActiveTahunPendaftaran();

        if (
            ! $tahun
            || ! $tahun->tanggal_penerbitan_kartu_tes_mulai
            || ! $tahun->tanggal_penerbitan_kartu_tes_selesai
        ) {
            return false;
        }

        return Carbon::now()->between(
            Carbon::parse($tahun->tanggal_penerbitan_kartu_tes_mulai),
            Carbon::parse($tahun->tanggal_penerbitan_kartu_tes_selesai)
        );
    }

    private function isWithinPengumumanPeriod(): bool
    {
        $tahun = $this->getActiveTahunPendaftaran();
        if (! $tahun) {
            return false;
        }

        foreach (
            [
                ['tanggal_pengumuman_jalur_prestasi_mulai',  'tanggal_pengumuman_jalur_prestasi_selesai'],
                ['tanggal_pengumuman_jalur_reguler_mulai',   'tanggal_pengumuman_jalur_reguler_selesai'],
                ['tanggal_pengumuman_jalur_afirmasi_mulai',  'tanggal_pengumuman_jalur_afirmasi_selesai'],
                ['tanggal_pengumuman_jalur_zonasi_mulai',    'tanggal_pengumuman_jalur_zonasi_selesai'],
                ['tanggal_pengumuman_jalur_mutasi_mulai',    'tanggal_pengumuman_jalur_mutasi_selesai'],
            ] as [$mulai, $selesai]
        ) {
            if ($tahun->{$mulai} && $tahun->{$selesai}) {
                if (Carbon::now()->between(
                    Carbon::parse($tahun->{$mulai}),
                    Carbon::parse($tahun->{$selesai})
                )) {
                    return true;
                }
            }
        }

        return false;
    }
}

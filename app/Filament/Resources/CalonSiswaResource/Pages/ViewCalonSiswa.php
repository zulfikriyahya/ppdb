<?php

namespace App\Filament\Resources\CalonSiswaResource\Pages;

use App\Filament\Resources\CalonSiswaResource;
use App\Filament\Traits\CalonSiswaFormTrait;
use App\Models\CalonSiswa;
use Carbon\Carbon;
use Filament\Forms\Components\Section;
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
                'cetak_formulir',
                'Formulir',
                'formulir',
                fn() => $this->canPrintFormulir()
            ),
            $this->buildPdfAction(
                'cetak_kartu_tes',
                'Kartu Tes',
                'kartu-tes',
                fn() => $this->canPrintKartuTes()
            ),
            $this->buildPdfAction(
                'cetak_skl',
                'Hasil',
                'skl',
                fn() => $this->canPrintHasil()
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

            // ----------------------------------------------------------------
            // Section FormulirPrestasi — hanya tampil jika ada data
            // ----------------------------------------------------------------
            Section::make('Data Formulir Prestasi')
                ->icon('heroicon-o-trophy')
                ->collapsible()
                ->columnSpanFull()
                ->visible(fn() => $this->record->formulirPrestasis()->exists())
                ->schema([
                    \Filament\Forms\Components\Repeater::make('formulirPrestasis')
                        ->relationship('formulirPrestasis')
                        ->addable(false)
                        ->deletable(false)
                        ->reorderable(false)
                        ->label('')
                        ->schema([
                            \Filament\Forms\Components\TextInput::make('nama_prestasi')
                                ->label('Nama / Judul Prestasi')
                                ->disabled(),

                            \Filament\Forms\Components\Select::make('prestasi_id')
                                ->label('Jenis Prestasi')
                                ->relationship('prestasi', 'nama')
                                ->disabled(),

                            \Filament\Forms\Components\TextInput::make('tahun_prestasi')
                                ->label('Tahun')
                                ->disabled(),

                            \Filament\Forms\Components\TextInput::make('penyelenggara_prestasi')
                                ->label('Penyelenggara')
                                ->disabled(),

                            \Filament\Forms\Components\FileUpload::make('berkas_prestasi')
                                ->label('Berkas Bukti')
                                ->disabled()
                                ->downloadable()
                                ->openable()
                                ->visibility('private')
                                ->columnSpanFull(),
                        ])
                        ->columns(['sm' => 1, 'md' => 2, 'lg' => 4]),
                ]),
        ]);
    }

    // =========================================================================
    // PDF ACTION BUILDER
    // =========================================================================

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
            ->filename(fn($record) => "{$label}_{$record->nama}_{$record->nisn}.pdf")
            ->savePdf()
            ->orientation('portrait')
            ->format('a4', 'mm')
            ->enableLinks()
            ->margin([10, 10, 10, 10])
            ->content(fn($record) => view($view, ['record' => $record]))
            ->visible($visibleCallback);
    }

    // =========================================================================
    // VISIBILITY RULES
    // =========================================================================

    private function getCalonSiswa(): ?CalonSiswa
    {
        return CalonSiswa::where('nisn', Auth::user()->username)->first();
    }

    private function canPrintFormulir(): bool
    {
        $cs = $this->getCalonSiswa();
        if (! $cs) {
            return false;
        }

        // Boleh cetak jika formulir sudah Disetujui
        return $cs->status_formulir === 'Disetujui';
    }

    private function canPrintKartuTes(): bool
    {
        $cs = $this->getCalonSiswa();
        if (! $cs) {
            return false;
        }

        // Blokir jika belum disetujui atau sudah final
        if (! in_array($cs->status_formulir, ['Disetujui'])) {
            return false;
        }

        if (in_array($cs->status_pendaftaran, [
            'Tidak Diterima',
            'Diterima Di Kelas Reguler',
            'Diterima Di Kelas Unggulan',
        ])) {
            return false;
        }

        return $this->isWithinKartuTesPeriod();
    }

    private function canPrintHasil(): bool
    {
        $cs = $this->getCalonSiswa();
        if (! $cs) {
            return false;
        }

        // Hanya yang sudah punya keputusan final
        if (! in_array($cs->status_pendaftaran, [
            'Diterima',
            'Diterima Di Kelas Reguler',
            'Diterima Di Kelas Unggulan',
            'Tidak Diterima',
        ])) {
            return false;
        }

        return $this->isWithinPengumumanPeriod();
    }

    // =========================================================================
    // DATE RANGE HELPERS
    // =========================================================================

    private function getActiveTahunPendaftaran(): ?object
    {
        return DB::table('tahun_pendaftarans')->where('status', 'Aktif')->first();
    }

    private function isWithinKartuTesPeriod(): bool
    {
        $t = $this->getActiveTahunPendaftaran();

        if (! $t?->tanggal_penerbitan_kartu_tes_mulai || ! $t?->tanggal_penerbitan_kartu_tes_selesai) {
            return false;
        }

        return Carbon::now()->between(
            Carbon::parse($t->tanggal_penerbitan_kartu_tes_mulai),
            Carbon::parse($t->tanggal_penerbitan_kartu_tes_selesai)
        );
    }

    private function isWithinPengumumanPeriod(): bool
    {
        $t = $this->getActiveTahunPendaftaran();
        if (! $t) {
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
            if ($t->{$mulai} && $t->{$selesai}) {
                if (Carbon::now()->between(
                    Carbon::parse($t->{$mulai}),
                    Carbon::parse($t->{$selesai})
                )) {
                    return true;
                }
            }
        }

        return false;
    }
}

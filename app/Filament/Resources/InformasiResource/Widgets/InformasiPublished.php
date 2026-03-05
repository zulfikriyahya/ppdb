<?php

namespace App\Filament\Resources\InformasiResource\Widgets;

use App\Models\CalonSiswa;
use App\Models\Informasi;
use Carbon\Carbon;
use Filament\Tables\Actions\Action;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Enums\ActionsPosition;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class InformasiPublished extends TableWidget
{
    protected static ?int $sort = 1;

    protected static bool $isLazy = false;

    protected function getTableHeading(): string
    {
        return 'Informasi';
    }

    private function getCalonSiswa(): ?CalonSiswa
    {
        return CalonSiswa::withoutGlobalScope('milik_sendiri')
            ->where('user_id', Auth::id())
            ->first();
    }

    private function statusColor(string $status): string
    {
        return match ($status) {
            'Diterima',
            'Diterima Di Kelas Reguler' => 'success',
            'Diterima Di Kelas Unggulan' => 'info',
            'Tidak Diterima'             => 'danger',
            default                      => 'warning',
        };
    }

    private function statusIcon(string $status): string
    {
        return match ($status) {
            'Berkas Tidak Lengkap'       => 'heroicon-o-document-minus',
            'Tidak Diterima'             => 'heroicon-o-no-symbol',
            'Diterima'                   => 'heroicon-o-check-circle',
            'Diterima Di Kelas Reguler',
            'Diterima Di Kelas Unggulan' => 'heroicon-o-shield-check',
            default                      => 'heroicon-o-arrow-path',
        };
    }

    private function isInPengumumanPeriod(): bool
    {
        $tahun = DB::table('tahun_pendaftarans')->where('status', 'Aktif')->first();

        if (! $tahun) {
            return false;
        }

        $now = Carbon::now();

        foreach (['prestasi', 'reguler', 'afirmasi', 'zonasi', 'mutasi'] as $jalur) {
            $mulaiRaw   = $tahun->{"tanggal_pengumuman_jalur_{$jalur}_mulai"} ?? null;
            $selesaiRaw = $tahun->{"tanggal_pengumuman_jalur_{$jalur}_selesai"} ?? null;

            if (empty($mulaiRaw) || empty($selesaiRaw)) {
                continue;
            }

            if ($now->between(Carbon::parse($mulaiRaw), Carbon::parse($selesaiRaw))) {
                return true;
            }
        }

        return false;
    }

    private function isCalonSiswa(): bool
    {
        return Auth::user()->hasRole('calon_siswa');
    }

    public function table(Table $table): Table
    {
        $calonSiswa = $this->isCalonSiswa() ? $this->getCalonSiswa() : null;

        $statusPendaftaran = $calonSiswa?->status_pendaftaran ?? '';
        $inPengumuman      = $this->isInPengumumanPeriod();

        $terminalStatuses = [
            'Diterima',
            'Diterima Di Kelas Unggulan',
            'Diterima Di Kelas Reguler',
            'Tidak Diterima',
        ];

        $hasTerminalStatus      = $calonSiswa && in_array($statusPendaftaran, $terminalStatuses);
        $showPendaftaranBadge   = $this->isCalonSiswa() && $calonSiswa !== null && ! $hasTerminalStatus;

        $urlFormulir     = $calonSiswa ? '/formulir' : '';
        $urlViewFormulir = $calonSiswa ? "/formulir/{$calonSiswa->id}" : '';
        $urlInformasi    = $calonSiswa ? '/informasi' : '';

        return $table
            ->query(
                Informasi::where('status', 'Publish')->latest('updated_at')
            )
            ->columns([
                TextColumn::make('judul')
                    ->label('Informasi')
                    ->description(fn(Informasi $record): string => Str::limit($record->isi, 50))
                    ->icon('heroicon-o-information-circle')
                    ->iconColor('info'),

                ImageColumn::make('gambar')
                    ->label('Lampiran'),

                TextColumn::make('tanggal')
                    ->label('Tanggal')
                    ->dateTime('d F Y H:i:s')
                    ->sinceTooltip()
                    ->sortable(),
            ])
            ->actions([
                Action::make('lihat')
                    ->hiddenLabel()
                    ->icon('heroicon-o-eye')
                    ->button()
                    ->url($urlInformasi)
                    ->outlined()
                    ->color('info'),
            ], ActionsPosition::BeforeColumns)
            ->striped()
            ->paginationPageOptions([5]);
    }
}

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
        return 'ℹ️ Informasi';
    }

    // -------------------------------------------------------------------------
    // Helpers
    // -------------------------------------------------------------------------

    private function getCalonSiswa(): ?CalonSiswa
    {
        return CalonSiswa::where('nisn', Auth::user()->username)->first();
    }

    private function statusColor(string $status): string
    {
        return match ($status) {
            'Diverifikasi',
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
            'Diverifikasi'               => 'heroicon-o-clipboard-document-check',
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
        $tahun   = DB::table('tahun_pendaftarans')->where('status', 'Aktif')->first();
        $sekarang = Carbon::now();

        $jalurs = ['prestasi', 'reguler', 'afirmasi', 'zonasi', 'mutasi'];

        foreach ($jalurs as $jalur) {
            $mulaiRaw   = $tahun->{"tanggal_pengumuman_jalur_{$jalur}_mulai"}   ?? null;
            $selesaiRaw = $tahun->{"tanggal_pengumuman_jalur_{$jalur}_selesai"} ?? null;

            if (empty($mulaiRaw) || empty($selesaiRaw)) {
                continue;
            }

            $mulai   = Carbon::createFromFormat('Y-m-d H:i:s', trim($mulaiRaw));
            $selesai = Carbon::createFromFormat('Y-m-d H:i:s', trim($selesaiRaw));

            if ($sekarang->between($mulai, $selesai)) {
                return true;
            }
        }

        return false;
    }

    private function isCalonSiswa(): bool
    {
        return Auth::user()->roles->first()->name === 'calon_siswa';
    }

    // -------------------------------------------------------------------------
    // Table
    // -------------------------------------------------------------------------

    public function table(Table $table): Table
    {
        $calonSiswa = $this->getCalonSiswa();
        $label      = $calonSiswa?->status_pendaftaran ?? '';

        $urlFormulir     = $calonSiswa ? '/formulir' : '';
        $urlViewFormulir = $calonSiswa ? "/formulir/{$calonSiswa->id}" : '';
        $urlInformasi    = $calonSiswa ? '/informasi' : '';

        $isCalonSiswa = $this->isCalonSiswa();

        $terminalStatuses = [
            'Diterima',
            'Diterima Di Kelas Unggulan',
            'Diterima Di Kelas Reguler',
            'Tidak Diterima',
        ];

        $hasTerminalStatus     = $calonSiswa && in_array($calonSiswa->status_pendaftaran, $terminalStatuses);
        $hidePendaftaranBadge  = ! $isCalonSiswa || $calonSiswa === null || $hasTerminalStatus;
        $inPengumuman          = $this->isInPengumumanPeriod();

        return $table
            ->headerActions([
                // --- Status Pendaftaran (non-terminal) ---
                Action::make('label_status_pendaftaran')
                    ->label('Status Pendaftaran :')
                    ->outlined()
                    ->color('gray')
                    ->disabled()
                    ->size('sm')
                    ->hidden($hidePendaftaranBadge),

                Action::make('status_pendaftaran')
                    ->label($label)
                    ->color(fn() => $calonSiswa ? $this->statusColor($calonSiswa->status_pendaftaran) : 'warning')
                    ->icon(fn() => $calonSiswa ? $this->statusIcon($calonSiswa->status_pendaftaran) : 'heroicon-o-arrow-path')
                    ->outlined()
                    ->size('sm')
                    ->url($urlFormulir)
                    ->hidden($hidePendaftaranBadge),

                // --- Status Kelulusan (periode pengumuman) ---
                Action::make('label_status_kelulusan')
                    ->label('Status Pendaftaran :')
                    ->outlined()
                    ->color('gray')
                    ->disabled()
                    ->size('sm')
                    ->hidden(! $inPengumuman),

                Action::make('status_kelulusan')
                    ->label($label)
                    ->color(fn() => $calonSiswa ? $this->statusColor($calonSiswa->status_pendaftaran) : '')
                    ->icon(fn() => $calonSiswa ? $this->statusIcon($calonSiswa->status_pendaftaran) : '')
                    ->outlined()
                    ->size('sm')
                    ->url($urlViewFormulir)
                    ->hidden(! $inPengumuman),
            ])
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

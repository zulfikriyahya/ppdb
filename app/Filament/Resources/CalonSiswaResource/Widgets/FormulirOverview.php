<?php

namespace App\Filament\Resources\CalonSiswaResource\Widgets;

use App\Models\CalonSiswa;
use Filament\Support\Enums\IconPosition;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;

class FormulirOverview extends BaseWidget
{
    protected static bool $isLazy = false;
    // protected ?string $heading = 'Formulir Pendaftaran';
    // protected ?string $description = 'An overview of some analytics.';
    // protected static ?int $sort = -2;




    // 'Diproses' => 'heroicon-o-arrow-path',
    // 'Diverifikasi' => 'heroicon-o-clipboard-document-check',
    // 'Berkas Tidak Lengkap' => 'heroicon-o-document-minus',
    // 'Ditolak' => 'heroicon-o-no-symbol',
    // 'Diterima' => 'heroicon-o-check-circle',
    // 'Diterima Di Kelas Reguler' => 'heroicon-o-shield-check',
    // 'Diterima Di Kelas Unggulan' => 'heroicon-o-shield-check',



    protected function getStats(): array
    {
        return [
            Stat::make('', CalonSiswa::count() . ' Peserta')
                ->description('Total Pendaftar')
                ->descriptionIcon('heroicon-o-user-circle', IconPosition::Before)
                ->color('gray')
                ->chart(CalonSiswa::selectRaw('COUNT(*) as total, DATE(created_at) as hari')
                    ->groupBy('hari')
                    ->orderBy('hari')
                    ->pluck('total')->toArray())
                ->extraAttributes([
                    'class' => 'cursor-pointer',
                    'onclick' => "window.location.href='/formulir'",
                ]),

            Stat::make('', CalonSiswa::query()->where('status_pendaftaran', 'Diproses')->count() . ' Peserta')
                ->description('Diproses')
                ->descriptionIcon('heroicon-o-arrow-path', IconPosition::Before)
                ->color('warning')
                ->chart(CalonSiswa::selectRaw('COUNT(*) as total, DATE(created_at) as hari')
                    ->groupBy('hari')
                    ->orderBy('hari')
                    ->pluck('total')->toArray()),

            Stat::make('Berkas Tidak Lengkap', CalonSiswa::query()->where('status_pendaftaran', 'Berkas Tidak Lengkap')->count() . ' Peserta')
                ->description('')
                ->descriptionIcon('')
                ->descriptionColor(''),
            Stat::make('Diverifikasi', CalonSiswa::query()->where('status_pendaftaran', 'Diverifikasi')->count() . ' Peserta')
                ->description('')
                ->descriptionIcon('')
                ->descriptionColor(''),
            Stat::make('Diterima', CalonSiswa::query()->where('status_pendaftaran', 'Diterima')->count() . ' Peserta')
                ->description('')
                ->descriptionIcon('')
                ->descriptionColor(''),
            Stat::make('Diterima Di Kelas Reguler', CalonSiswa::query()->where('status_pendaftaran', 'Diterima Di Kelas Reguler')->count() . ' Peserta')
                ->description('')
                ->descriptionIcon('')
                ->descriptionColor(''),
            Stat::make('Diterima Di Kelas Unggulan', CalonSiswa::query()->where('status_pendaftaran', 'Diterima Di Kelas Unggulan')->count() . ' Peserta')
                ->description('')
                ->descriptionIcon('')
                ->descriptionColor(''),
            Stat::make('Ditolak', CalonSiswa::query()->where('status_pendaftaran', 'Ditolak')->count() . ' Peserta')
                ->description('')
                ->descriptionIcon('')
                ->descriptionColor(''),
        ];
    }
}

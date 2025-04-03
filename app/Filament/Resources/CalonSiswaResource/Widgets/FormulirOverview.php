<?php

namespace App\Filament\Resources\CalonSiswaResource\Widgets;

use App\Models\CalonSiswa;
use Illuminate\Support\Facades\Auth;
use Filament\Support\Enums\IconPosition;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;

class FormulirOverview extends BaseWidget
{
    // protected static bool $isLazy = false;
    protected ?string $heading = '♾️ Navigasi';
    // protected ?string $description = 'An overview of some analytics.';
    protected static ?int $sort = 0;

    protected function getStats(): array
    {
        if (Auth::user()->username === 'administrator') {
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
                    ->chart(
                        CalonSiswa::selectRaw('COUNT(*) as total, DATE(created_at) as hari')
                            ->where('status_pendaftaran', 'Diproses') // Filter hanya status "Diproses"
                            ->groupBy('hari')
                            ->orderBy('hari')
                            ->pluck('total')
                            ->toArray()
                    )

                    ->extraAttributes([
                        'class' => 'cursor-pointer',
                        'onclick' => "window.location.href='/formulir?tableFilters[status_pendaftaran][value]=Diproses'",
                    ]),

                Stat::make('', CalonSiswa::query()->where('status_pendaftaran', 'Berkas Tidak Lengkap')->count() . ' Peserta')
                    ->description('Berkas Tidak Lengkap')
                    ->descriptionIcon('heroicon-o-document-minus', IconPosition::Before)
                    ->color('warning')
                    ->chart(
                        CalonSiswa::selectRaw('COUNT(*) as total, DATE(created_at) as hari')
                            ->where('status_pendaftaran', 'Berkas Tidak Lengkap')
                            ->groupBy('hari')
                            ->orderBy('hari')
                            ->pluck('total')
                            ->toArray()
                    )

                    ->extraAttributes([
                        'class' => 'cursor-pointer',
                        'onclick' => "window.location.href='/formulir?tableFilters[status_pendaftaran][value]=Berkas+Tidak+Lengkap'",
                    ]),

                Stat::make('', CalonSiswa::query()->where('status_pendaftaran', 'Diverifikasi')->count() . ' Peserta')
                    ->description('Diverifikasi')
                    ->descriptionIcon('heroicon-o-clipboard-document-check', IconPosition::Before)
                    ->color('success')
                    ->chart(
                        CalonSiswa::selectRaw('COUNT(*) as total, DATE(created_at) as hari')
                            ->where('status_pendaftaran', 'Diverifikasi')
                            ->groupBy('hari')
                            ->orderBy('hari')
                            ->pluck('total')
                            ->toArray()
                    )

                    ->extraAttributes([
                        'class' => 'cursor-pointer',
                        'onclick' => "window.location.href='/formulir?tableFilters[status_pendaftaran][value]=Diverifikasi'",
                    ]),

                Stat::make('', CalonSiswa::query()->where('status_pendaftaran', 'Diterima')->count() . ' Peserta')
                    ->description('Diterima Jalur Prestasi')
                    ->descriptionIcon('heroicon-o-check-circle', IconPosition::Before)
                    ->color('success')
                    ->chart(
                        CalonSiswa::selectRaw('COUNT(*) as total, DATE(created_at) as hari')
                            ->where('status_pendaftaran', 'Diterima')
                            ->groupBy('hari')
                            ->orderBy('hari')
                            ->pluck('total')
                            ->toArray()
                    )
                    ->extraAttributes([
                        'class' => 'cursor-pointer',
                        'onclick' => "window.location.href='/formulir?tableFilters[status_pendaftaran][value]=Diterima'",
                    ]),

                Stat::make('', CalonSiswa::query()->where('status_pendaftaran', 'Diterima Di Kelas Reguler')->count() . ' Peserta')
                    ->description('Diterima Di Kelas Reguler')
                    ->descriptionIcon('heroicon-o-shield-check', IconPosition::Before)
                    ->color('success')
                    ->chart(
                        CalonSiswa::selectRaw('COUNT(*) as total, DATE(created_at) as hari')
                            ->where('status_pendaftaran', 'Diterima Di Kelas Reguler')
                            ->groupBy('hari')
                            ->orderBy('hari')
                            ->pluck('total')
                            ->toArray()
                    )
                    ->extraAttributes([
                        'class' => 'cursor-pointer',
                        'onclick' => "window.location.href='/formulir?tableFilters[status_pendaftaran][value]=Diterima+Di+Kelas+Reguler'",
                    ]),

                Stat::make('', CalonSiswa::query()->where('status_pendaftaran', 'Diterima Di Kelas Unggulan')->count() . ' Peserta')
                    ->description('Diterima Di Kelas Unggulan')
                    ->descriptionIcon('heroicon-o-shield-check', IconPosition::Before)
                    ->color('success')
                    ->chart(
                        CalonSiswa::selectRaw('COUNT(*) as total, DATE(created_at) as hari')
                            ->where('status_pendaftaran', 'Diterima Di Kelas Unggulan')
                            ->groupBy('hari')
                            ->orderBy('hari')
                            ->pluck('total')
                            ->toArray()
                    )
                    ->extraAttributes([
                        'class' => 'cursor-pointer',
                        'onclick' => "window.location.href='/formulir?tableFilters[status_pendaftaran][value]=Diterima+Di+Kelas+Unggulan'",
                    ]),

                Stat::make('', CalonSiswa::query()->where('status_pendaftaran', 'Ditolak')->count() . ' Peserta')
                    ->description('Ditolak')
                    ->descriptionIcon('heroicon-o-no-symbol', IconPosition::Before)
                    ->color('danger')
                    ->chart(
                        CalonSiswa::selectRaw('COUNT(*) as total, DATE(created_at) as hari')
                            ->where('status_pendaftaran', 'Ditolak')
                            ->groupBy('hari')
                            ->orderBy('hari')
                            ->pluck('total')
                            ->toArray()
                    )
                    ->extraAttributes([
                        'class' => 'cursor-pointer',
                        'onclick' => "window.location.href='/formulir?tableFilters[status_pendaftaran][value]=Ditolak'",
                    ]),
            ];
        }

        return [
            Stat::make('', CalonSiswa::count() . ' Peserta')
                ->description('Total Pendaftar')
                ->descriptionIcon('heroicon-o-user-circle', IconPosition::Before)
                ->color('gray')
                ->chart(CalonSiswa::selectRaw('COUNT(*) as total, DATE(created_at) as hari')
                    ->groupBy('hari')
                    ->orderBy('hari')
                    ->pluck('total')->toArray()),
            // ->extraAttributes([
            //     'class' => 'cursor-pointer',
            //     'onclick' => "window.location.href='/formulir'",
            // ]),

            Stat::make('', CalonSiswa::query()->where('status_pendaftaran', 'Diproses')->count() . ' Peserta')
                ->description('Diproses')
                ->descriptionIcon('heroicon-o-arrow-path', IconPosition::Before)
                ->color('warning')
                ->chart(CalonSiswa::selectRaw('COUNT(*) as total, DATE(created_at) as hari')
                    ->where('status_pendaftaran', 'Diproses') // Filter hanya status "Diproses"
                    ->groupBy('hari')
                    ->orderBy('hari')
                    ->pluck('total')
                    ->toArray()),
            // ->extraAttributes([
            //     'class' => 'cursor-pointer',
            //     'onclick' => "window.location.href='/formulir?tableFilters[status_pendaftaran][value]=Diproses'",
            // ]),

            Stat::make('', CalonSiswa::query()->where('status_pendaftaran', 'Berkas Tidak Lengkap')->count() . ' Peserta')
                ->description('Berkas Tidak Lengkap')
                ->descriptionIcon('heroicon-o-document-minus', IconPosition::Before)
                ->color('warning')
                ->chart(CalonSiswa::selectRaw('COUNT(*) as total, DATE(created_at) as hari')
                    ->where('status_pendaftaran', 'Berkas Tidak Lengkap')
                    ->groupBy('hari')
                    ->orderBy('hari')
                    ->pluck('total')
                    ->toArray()),
            // ->extraAttributes([
            //     'class' => 'cursor-pointer',
            //     'onclick' => "window.location.href='/formulir?tableFilters[status_pendaftaran][value]=Berkas+Tidak+Lengkap'",
            // ]),

            Stat::make('', CalonSiswa::query()->where('status_pendaftaran', 'Diverifikasi')->count() . ' Peserta')
                ->description('Diverifikasi')
                ->descriptionIcon('heroicon-o-clipboard-document-check', IconPosition::Before)
                ->color('success')
                ->chart(CalonSiswa::selectRaw('COUNT(*) as total, DATE(created_at) as hari')
                    ->where('status_pendaftaran', 'Diverifikasi')
                    ->groupBy('hari')
                    ->orderBy('hari')
                    ->pluck('total')
                    ->toArray()),
            // ->extraAttributes([
            //     'class' => 'cursor-pointer',
            //     'onclick' => "window.location.href='/formulir?tableFilters[status_pendaftaran][value]=Diverifikasi'",
            // ]),
        ];
    }
}

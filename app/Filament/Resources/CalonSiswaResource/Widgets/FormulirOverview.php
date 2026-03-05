<?php

namespace App\Filament\Resources\CalonSiswaResource\Widgets;

use App\Models\CalonSiswa;
use Filament\Support\Enums\IconPosition;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Illuminate\Support\Facades\Auth;

class FormulirOverview extends BaseWidget
{
    protected static bool $isLazy = false;

    protected ?string $heading = '♾️ Statistik Pendaftaran';

    protected static ?int $sort = 0;

    // Refresh tiap 60 detik agar data tetap live
    protected static ?string $pollingInterval = '60s';

    protected function getStats(): array
    {
        $isCalonSiswa = Auth::user()->hasRole('calon_siswa');
        $isAdmin = ! $isCalonSiswa;

        // ----------------------------------------------------------------
        // 1 query — hitung semua status_pendaftaran sekaligus
        // ----------------------------------------------------------------
        $statusCount = CalonSiswa::selectRaw('status_pendaftaran, COUNT(*) as total')
            ->groupBy('status_pendaftaran')
            ->pluck('total', 'status_pendaftaran')
            ->toArray();

        // ----------------------------------------------------------------
        // 1 query — hitung semua status_formulir sekaligus
        // ----------------------------------------------------------------
        $formulirCount = CalonSiswa::selectRaw('status_formulir, COUNT(*) as total')
            ->groupBy('status_formulir')
            ->pluck('total', 'status_formulir')
            ->toArray();

        $totalPendaftar = array_sum($statusCount);
        $diproses = $statusCount['Diproses'] ?? 0;
        $berkasTidakLengkap = $statusCount['Berkas Tidak Lengkap'] ?? 0;
        $diverifikasi = $statusCount['Diverifikasi'] ?? 0;
        $diterimaPrestasi = $statusCount['Diterima'] ?? 0;
        $diterimaReguler = $statusCount['Diterima Di Kelas Reguler'] ?? 0;
        $diterimaUnggulan = $statusCount['Diterima Di Kelas Unggulan'] ?? 0;
        $tidakDiterima = $statusCount['Tidak Diterima'] ?? 0;
        $formulirDisetujui = $formulirCount['Disetujui'] ?? 0;
        $formulirDitolak = $formulirCount['Ditolak'] ?? 0;

        // ----------------------------------------------------------------
        // Chart helper — 1 query per stat, dijalankan lazy
        // ----------------------------------------------------------------
        $chart = function (?string $status = null) {
            return CalonSiswa::selectRaw('COUNT(*) as total, DATE(created_at) as hari')
                ->when(
                    $status,
                    fn ($q) => $q->where('status_pendaftaran', $status)
                )
                ->groupBy('hari')
                ->orderBy('hari')
                ->pluck('total')
                ->toArray();
        };

        $url = fn (string $path) => "/formulir{$path}";

        // ----------------------------------------------------------------
        // Stat builder helper
        // ----------------------------------------------------------------
        $makeStat = fn (
            string $value,
            string $description,
            string $icon,
            string $color,
            array $chartData,
            string $href
        ) => Stat::make('', $value)
            ->description($description)
            ->descriptionIcon($icon, IconPosition::Before)
            ->color($color)
            ->chart($chartData)
            ->extraAttributes([
                'class' => 'cursor-pointer transition hover:opacity-80',
                'onclick' => "window.location.href='{$href}'",
            ]);

        // ----------------------------------------------------------------
        // Stats dasar (tampil untuk semua role)
        // ----------------------------------------------------------------
        $stats = [
            $makeStat(
                "{$totalPendaftar} Peserta",
                'Total Pendaftar',
                'heroicon-o-user-circle',
                'gray',
                $chart(),
                $url('')
            ),
            $makeStat(
                "{$diproses} Peserta",
                'Formulir Diproses',
                'heroicon-o-arrow-path',
                'warning',
                $chart('Diproses'),
                $url('?tableFilters[status_pendaftaran][value]=Diproses')
            ),
            $makeStat(
                "{$berkasTidakLengkap} Peserta",
                'Berkas Tidak Lengkap',
                'heroicon-o-document-minus',
                'warning',
                $chart('Berkas Tidak Lengkap'),
                $url('?tableFilters[status_pendaftaran][value]=Berkas+Tidak+Lengkap')
            ),
            $makeStat(
                "{$diverifikasi} Peserta",
                'Diverifikasi',
                'heroicon-o-clipboard-document-check',
                'success',
                $chart('Diverifikasi'),
                $url('?tableFilters[status_pendaftaran][value]=Diverifikasi')
            ),
        ];

        // ----------------------------------------------------------------
        // Stats admin-only
        // ----------------------------------------------------------------
        if ($isAdmin) {
            $stats = array_merge($stats, [
                $makeStat(
                    "{$formulirDisetujui} Formulir",
                    'Formulir Disetujui',
                    'heroicon-o-document-check',
                    'success',
                    CalonSiswa::selectRaw('COUNT(*) as total, DATE(created_at) as hari')
                        ->where('status_formulir', 'Disetujui')
                        ->groupBy('hari')->orderBy('hari')->pluck('total')->toArray(),
                    $url('?tableFilters[status_formulir][value]=Disetujui')
                ),

                $makeStat(
                    "{$formulirDitolak} Formulir",
                    'Formulir Ditolak',
                    'heroicon-o-document-minus',
                    'danger',
                    CalonSiswa::selectRaw('COUNT(*) as total, DATE(created_at) as hari')
                        ->where('status_formulir', 'Ditolak')
                        ->groupBy('hari')->orderBy('hari')->pluck('total')->toArray(),
                    $url('?tableFilters[status_formulir][value]=Ditolak')
                ),

                $makeStat(
                    "{$diterimaPrestasi} Peserta",
                    'Diterima Jalur Prestasi',
                    'heroicon-o-check-circle',
                    'success',
                    $chart('Diterima'),
                    $url('?tableFilters[status_pendaftaran][value]=Diterima')
                ),

                $makeStat(
                    "{$diterimaReguler} Peserta",
                    'Diterima Kelas Reguler',
                    'heroicon-o-shield-check',
                    'success',
                    $chart('Diterima Di Kelas Reguler'),
                    $url('?tableFilters[status_pendaftaran][value]=Diterima+Di+Kelas+Reguler')
                ),

                $makeStat(
                    "{$diterimaUnggulan} Peserta",
                    'Diterima Kelas Unggulan',
                    'heroicon-o-shield-check',
                    'info',
                    $chart('Diterima Di Kelas Unggulan'),
                    $url('?tableFilters[status_pendaftaran][value]=Diterima+Di+Kelas+Unggulan')
                ),

                $makeStat(
                    "{$tidakDiterima} Peserta",
                    'Tidak Diterima',
                    'heroicon-o-no-symbol',
                    'danger',
                    $chart('Tidak Diterima'),
                    $url('?tableFilters[status_pendaftaran][value]=Tidak+Diterima')
                ),
            ]);
        }

        return $stats;
    }
}

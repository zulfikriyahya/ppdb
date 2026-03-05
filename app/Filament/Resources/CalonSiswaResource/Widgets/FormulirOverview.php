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

    protected static ?string $pollingInterval = '60s';

    protected function getStats(): array
    {
        $user         = Auth::user();
        $isCalonSiswa = $user->hasRole('calon_siswa');

        // ----------------------------------------------------------------
        // Query counts
        // ----------------------------------------------------------------
        $statusCount = CalonSiswa::selectRaw('status_pendaftaran, COUNT(*) as total')
            ->groupBy('status_pendaftaran')
            ->pluck('total', 'status_pendaftaran')
            ->toArray();

        $formulirCount = CalonSiswa::selectRaw('status_formulir, COUNT(*) as total')
            ->groupBy('status_formulir')
            ->pluck('total', 'status_formulir')
            ->toArray();

        // status_pendaftaran
        $totalPendaftar   = array_sum($statusCount);
        $diproses         = $statusCount['Diproses'] ?? 0;
        $diterima         = $statusCount['Diterima'] ?? 0;
        $diterimaReguler  = $statusCount['Diterima Di Kelas Reguler'] ?? 0;
        $diterimaUnggulan = $statusCount['Diterima Di Kelas Unggulan'] ?? 0;
        $tidakDiterima    = $statusCount['Tidak Diterima'] ?? 0;

        // status_formulir
        $fDiproses  = $formulirCount['Diproses'] ?? 0;
        $fBerkas    = $formulirCount['Berkas Tidak Lengkap'] ?? 0;
        $fDisetujui = $formulirCount['Disetujui'] ?? 0;
        $fDitolak   = $formulirCount['Ditolak'] ?? 0;

        // ----------------------------------------------------------------
        // Chart helpers
        // ----------------------------------------------------------------
        $chartBy = fn(string $col, ?string $val = null) => CalonSiswa
            ::selectRaw('COUNT(*) as total, DATE(created_at) as hari')
            ->when($val, fn($q) => $q->where($col, $val))
            ->groupBy('hari')
            ->orderBy('hari')
            ->pluck('total')
            ->toArray();

        $url = fn(string $filter = '') => "/formulir{$filter}";

        // ----------------------------------------------------------------
        // Stat builder
        // ----------------------------------------------------------------
        $stat = fn(
            string $value,
            string $label,
            string $icon,
            string $color,
            array  $chart,
            string $href
        ) => Stat::make('', $value)
            ->description($label)
            ->descriptionIcon($icon, IconPosition::Before)
            ->color($color)
            ->chart($chart)
            ->extraAttributes([
                'class'   => 'cursor-pointer transition hover:opacity-80',
                'onclick' => "window.location.href='{$href}'",
            ]);

        // ================================================================
        // VIEW: calon_siswa — total + status milik sendiri
        // ================================================================
        if ($isCalonSiswa) {
            $cs = CalonSiswa::where('user_id', $user->id)->first();

            $statusLabel = $cs?->status_pendaftaran ?? 'Belum Mendaftar';
            $formulirLabel = $cs?->status_formulir ?? '-';

            [$statusColor, $statusIcon] = match ($cs?->status_pendaftaran) {
                'Diterima',
                'Diterima Di Kelas Reguler',
                'Diterima Di Kelas Unggulan' => ['success', 'heroicon-o-check-circle'],
                'Tidak Diterima'             => ['danger',  'heroicon-o-no-symbol'],
                default                      => ['warning', 'heroicon-o-arrow-path'],
            };

            [$formulirColor, $formulirIcon] = match ($cs?->status_formulir) {
                'Disetujui'            => ['success', 'heroicon-o-document-check'],
                'Berkas Tidak Lengkap' => ['danger',  'heroicon-o-document-minus'],
                'Ditolak'              => ['danger',  'heroicon-o-x-circle'],
                default                => ['warning', 'heroicon-o-arrow-path'],
            };

            return [
                $stat(
                    "{$totalPendaftar} Peserta",
                    'Total Pendaftar',
                    'heroicon-o-users',
                    'gray',
                    $chartBy('status_pendaftaran'),
                    $url()
                ),
                $stat(
                    $statusLabel,
                    'Status Pendaftaran Kamu',
                    $statusIcon,
                    $statusColor,
                    $chartBy('status_pendaftaran', $cs?->status_pendaftaran),
                    $url()
                ),
                $stat(
                    $formulirLabel,
                    'Status Formulir Kamu',
                    $formulirIcon,
                    $formulirColor,
                    $chartBy('status_formulir', $cs?->status_formulir),
                    $url()
                ),
            ];
        }

        // ================================================================
        // VIEW: admin — grouped & ordered by flow proses
        //
        // Urutan flow:
        //   [Total]
        //   --- Formulir ---
        //   Diproses → Berkas Tidak Lengkap → Disetujui → Ditolak
        //   --- Pendaftaran ---
        //   Diproses → Diterima → Reguler → Unggulan → Tidak Diterima
        // ================================================================
        return [

            // ── RINGKASAN ─────────────────────────────────────────────
            $stat(
                "{$totalPendaftar} Peserta",
                'Total Pendaftar',
                'heroicon-o-users',
                'gray',
                $chartBy('status_pendaftaran'),
                $url()
            ),

            // ── STATUS FORMULIR (flow verifikasi berkas) ──────────────
            $stat(
                "{$fDiproses} Formulir",
                'Formulir Diproses',
                'heroicon-o-arrow-path',
                'warning',
                $chartBy('status_formulir', 'Diproses'),
                $url('?tableFilters[status_formulir][value]=Diproses')
            ),
            $stat(
                "{$fBerkas} Formulir",
                'Berkas Tidak Lengkap',
                'heroicon-o-document-minus',
                'danger',
                $chartBy('status_formulir', 'Berkas Tidak Lengkap'),
                $url('?tableFilters[status_formulir][value]=Berkas+Tidak+Lengkap')
            ),
            $stat(
                "{$fDisetujui} Formulir",
                'Formulir Disetujui',
                'heroicon-o-document-check',
                'success',
                $chartBy('status_formulir', 'Disetujui'),
                $url('?tableFilters[status_formulir][value]=Disetujui')
            ),
            $stat(
                "{$fDitolak} Formulir",
                'Formulir Ditolak',
                'heroicon-o-x-circle',
                'danger',
                $chartBy('status_formulir', 'Ditolak'),
                $url('?tableFilters[status_formulir][value]=Ditolak')
            ),

            // ── STATUS PENDAFTARAN (flow keputusan akhir) ─────────────
            $stat(
                "{$diproses} Peserta",
                'Pendaftaran Diproses',
                'heroicon-o-clock',
                'gray',
                $chartBy('status_pendaftaran', 'Diproses'),
                $url('?tableFilters[status_pendaftaran][value]=Diproses')
            ),
            $stat(
                "{$diterima} Peserta",
                'Diterima — Jalur Prestasi',
                'heroicon-o-star',
                'success',
                $chartBy('status_pendaftaran', 'Diterima'),
                $url('?tableFilters[status_pendaftaran][value]=Diterima')
            ),
            $stat(
                "{$diterimaReguler} Peserta",
                'Diterima — Kelas Reguler',
                'heroicon-o-shield-check',
                'success',
                $chartBy('status_pendaftaran', 'Diterima Di Kelas Reguler'),
                $url('?tableFilters[status_pendaftaran][value]=Diterima+Di+Kelas+Reguler')
            ),
            $stat(
                "{$diterimaUnggulan} Peserta",
                'Diterima — Kelas Unggulan',
                'heroicon-o-shield-check',
                'info',
                $chartBy('status_pendaftaran', 'Diterima Di Kelas Unggulan'),
                $url('?tableFilters[status_pendaftaran][value]=Diterima+Di+Kelas+Unggulan')
            ),
            $stat(
                "{$tidakDiterima} Peserta",
                'Tidak Diterima',
                'heroicon-o-no-symbol',
                'danger',
                $chartBy('status_pendaftaran', 'Tidak Diterima'),
                $url('?tableFilters[status_pendaftaran][value]=Tidak+Diterima')
            ),
        ];
    }
}

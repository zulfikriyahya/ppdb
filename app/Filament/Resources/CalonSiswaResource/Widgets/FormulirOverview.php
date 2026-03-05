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

    protected ?string $heading = 'Statistik Pendaftaran';

    protected static ?int $sort = 0;

    protected static ?string $pollingInterval = '60s';

    private function chartBy(string $col, ?string $val = null): array
    {
        return CalonSiswa::selectRaw('COUNT(*) as total, DATE(created_at) as hari')
            ->when($val, fn($q) => $q->where($col, $val))
            ->groupBy('hari')
            ->orderBy('hari')
            ->pluck('total')
            ->toArray();
    }

    private function makeStat(
        string $value,
        string $label,
        string $icon,
        string $color,
        array $chart,
        string $href
    ): Stat {
        return Stat::make('', $value)
            ->description($label)
            ->descriptionIcon($icon, IconPosition::Before)
            ->color($color)
            ->chart($chart)
            ->extraAttributes([
                'class' => 'cursor-pointer transition hover:opacity-80',
                'onclick' => "window.location.href='{$href}'",
            ]);
    }

    private function url(string $filter = ''): string
    {
        return "/formulir{$filter}";
    }

    protected function getStats(): array
    {
        $user = Auth::user();
        $isCalonSiswa = $user->hasRole('calon_siswa');

        $statusCount = CalonSiswa::selectRaw('status_pendaftaran, COUNT(*) as total')
            ->groupBy('status_pendaftaran')
            ->pluck('total', 'status_pendaftaran')
            ->toArray();

        $formulirCount = CalonSiswa::selectRaw('status_formulir, COUNT(*) as total')
            ->groupBy('status_formulir')
            ->pluck('total', 'status_formulir')
            ->toArray();

        $totalPendaftar   = array_sum($statusCount);
        $diproses         = $statusCount['Diproses'] ?? 0;
        $diterima         = $statusCount['Diterima'] ?? 0;
        $diterimaReguler  = $statusCount['Diterima Di Kelas Reguler'] ?? 0;
        $diterimaUnggulan = $statusCount['Diterima Di Kelas Unggulan'] ?? 0;
        $tidakDiterima    = $statusCount['Tidak Diterima'] ?? 0;

        $fDiproses  = $formulirCount['Diproses'] ?? 0;
        $fBerkas    = $formulirCount['Berkas Tidak Lengkap'] ?? 0;
        $fDisetujui = $formulirCount['Disetujui'] ?? 0;
        $fDitolak   = $formulirCount['Ditolak'] ?? 0;

        if ($isCalonSiswa) {
            $cs = CalonSiswa::withoutGlobalScope('tahun_aktif')
                ->where('user_id', $user->id)
                ->latest()
                ->first();

            $statusLabel  = $cs?->status_pendaftaran ?? 'Belum Mendaftar';
            $formulirLabel = $cs?->status_formulir ?? '-';

            [$statusColor, $statusIcon] = match ($cs?->status_pendaftaran) {
                'Diterima',
                'Diterima Di Kelas Reguler',
                'Diterima Di Kelas Unggulan' => ['success', 'heroicon-o-check-circle'],
                'Tidak Diterima'             => ['danger',  'heroicon-o-no-symbol'],
                default                      => ['warning', 'heroicon-o-arrow-path'],
            };

            [$formulirColor, $formulirIcon] = match ($cs?->status_formulir) {
                'Disetujui'          => ['success', 'heroicon-o-document-check'],
                'Berkas Tidak Lengkap',
                'Ditolak'            => ['danger',  match ($cs?->status_formulir) {
                    'Berkas Tidak Lengkap' => 'heroicon-o-document-minus',
                    default                => 'heroicon-o-x-circle',
                }],
                default              => ['warning', 'heroicon-o-arrow-path'],
            };

            return [
                $this->makeStat(
                    "{$totalPendaftar} Peserta",
                    'Total Pendaftar',
                    'heroicon-o-users',
                    'gray',
                    $this->chartBy('status_pendaftaran'),
                    $this->url()
                ),
                $this->makeStat(
                    $statusLabel,
                    'Status Pendaftaran Kamu',
                    $statusIcon,
                    $statusColor,
                    $this->chartBy('status_pendaftaran', $cs?->status_pendaftaran),
                    $this->url()
                ),
                $this->makeStat(
                    $formulirLabel,
                    'Status Formulir Kamu',
                    $formulirIcon,
                    $formulirColor,
                    $this->chartBy('status_formulir', $cs?->status_formulir),
                    $this->url()
                ),
            ];
        }

        return [
            $this->makeStat(
                "{$totalPendaftar} Peserta",
                'Total Pendaftar',
                'heroicon-o-users',
                'gray',
                $this->chartBy('status_pendaftaran'),
                $this->url()
            ),
            $this->makeStat(
                "{$fDiproses} Formulir",
                'Formulir Diproses',
                'heroicon-o-arrow-path',
                'warning',
                $this->chartBy('status_formulir', 'Diproses'),
                $this->url('?tableFilters[status_formulir][value]=Diproses')
            ),
            $this->makeStat(
                "{$fBerkas} Formulir",
                'Berkas Tidak Lengkap',
                'heroicon-o-document-minus',
                'danger',
                $this->chartBy('status_formulir', 'Berkas Tidak Lengkap'),
                $this->url('?tableFilters[status_formulir][value]=Berkas+Tidak+Lengkap')
            ),
            $this->makeStat(
                "{$fDisetujui} Formulir",
                'Formulir Disetujui',
                'heroicon-o-document-check',
                'success',
                $this->chartBy('status_formulir', 'Disetujui'),
                $this->url('?tableFilters[status_formulir][value]=Disetujui')
            ),
            $this->makeStat(
                "{$fDitolak} Formulir",
                'Formulir Ditolak',
                'heroicon-o-x-circle',
                'danger',
                $this->chartBy('status_formulir', 'Ditolak'),
                $this->url('?tableFilters[status_formulir][value]=Ditolak')
            ),
            $this->makeStat(
                "{$diproses} Peserta",
                'Pendaftaran Diproses',
                'heroicon-o-clock',
                'gray',
                $this->chartBy('status_pendaftaran', 'Diproses'),
                $this->url('?tableFilters[status_pendaftaran][value]=Diproses')
            ),
            $this->makeStat(
                "{$diterima} Peserta",
                'Diterima — Jalur Prestasi',
                'heroicon-o-star',
                'success',
                $this->chartBy('status_pendaftaran', 'Diterima'),
                $this->url('?tableFilters[status_pendaftaran][value]=Diterima')
            ),
            $this->makeStat(
                "{$diterimaReguler} Peserta",
                'Diterima — Kelas Reguler',
                'heroicon-o-shield-check',
                'success',
                $this->chartBy('status_pendaftaran', 'Diterima Di Kelas Reguler'),
                $this->url('?tableFilters[status_pendaftaran][value]=Diterima+Di+Kelas+Reguler')
            ),
            $this->makeStat(
                "{$diterimaUnggulan} Peserta",
                'Diterima — Kelas Unggulan',
                'heroicon-o-shield-check',
                'info',
                $this->chartBy('status_pendaftaran', 'Diterima Di Kelas Unggulan'),
                $this->url('?tableFilters[status_pendaftaran][value]=Diterima+Di+Kelas+Unggulan')
            ),
            $this->makeStat(
                "{$tidakDiterima} Peserta",
                'Tidak Diterima',
                'heroicon-o-no-symbol',
                'danger',
                $this->chartBy('status_pendaftaran', 'Tidak Diterima'),
                $this->url('?tableFilters[status_pendaftaran][value]=Tidak+Diterima')
            ),
        ];
    }
}

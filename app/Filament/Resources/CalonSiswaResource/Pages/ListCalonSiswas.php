<?php

namespace App\Filament\Resources\CalonSiswaResource\Pages;

use App\Filament\Exports\CalonSiswaExporter;
use App\Filament\Imports\CalonSiswaImporter;
use App\Filament\Resources\CalonSiswaResource;
use App\Models\CalonSiswa;
use Filament\Actions\Action;
use Filament\Actions\ExportAction;
use Filament\Actions\ImportAction;
use Filament\Resources\Pages\ListRecords;
use Filament\Support\Colors\Color;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ListCalonSiswas extends ListRecords
{
    protected static string $resource = CalonSiswaResource::class;

    protected function getHeaderActions(): array
    {
        $calonSiswa = $this->getCalonSiswaRecord();

        return [
            $this->getDaftarSekarangAction($calonSiswa),
            $this->getLihatFormulirAction($calonSiswa),
            $this->getUbahFormulirAction($calonSiswa),
            $this->getExportAction(),
            $this->getImportAction(),
        ];
    }

    // ========================================================================
    // HELPER METHODS
    // ========================================================================

    private function getCalonSiswaRecord(): ?CalonSiswa
    {
        if (! Auth::check()) {
            return null;
        }

        return CalonSiswa::where('nisn', Auth::user()->username)->first();
    }

    private function isCalonSiswa(): bool
    {
        return Auth::user()->roles->first()->name === 'calon_siswa';
    }

    private function isSuperAdmin(): bool
    {
        return Auth::user()->roles->first()->name === 'super_admin';
    }

    private function getFormulirUrl(?CalonSiswa $calonSiswa, string $action = ''): string
    {
        $baseUrl = '/formulir';

        if (! $calonSiswa) {
            return $action === 'create' ? "{$baseUrl}/create" : '';
        }

        return match ($action) {
            'view' => "{$baseUrl}/{$calonSiswa->id}",
            'edit' => "{$baseUrl}/{$calonSiswa->id}/edit",
            default => $baseUrl,
        };
    }

    // ========================================================================
    // ACTION BUILDERS
    // ========================================================================

    private function getDaftarSekarangAction(?CalonSiswa $calonSiswa): Action
    {
        return Action::make('buat_formulir_pendaftaran')
            ->label('Daftar Sekarang 🚀')
            ->icon('heroicon-o-clipboard-document-list')
            ->outlined()
            ->color('primary')
            ->url($this->getFormulirUrl(null, 'create'))
            ->hidden(! $this->isCalonSiswa() || $calonSiswa !== null);
    }

    private function getLihatFormulirAction(?CalonSiswa $calonSiswa): Action
    {
        $allowedStatuses = ['Diproses', 'Berkas Tidak Lengkap'];

        return Action::make('lihat_formulir_pendaftaran')
            ->label('Lihat')
            ->icon('heroicon-m-eye')
            ->outlined()
            ->url($this->getFormulirUrl($calonSiswa, 'view'))
            ->color(Color::Zinc)
            ->hidden(
                ! $this->isCalonSiswa()
                    || $calonSiswa === null
                    || in_array($calonSiswa->status_pendaftaran, $allowedStatuses)
            );
    }

    private function getUbahFormulirAction(?CalonSiswa $calonSiswa): Action
    {
        $blockedStatuses = [
            'Diterima',
            'Diterima Di Kelas Unggulan',
            'Diterima Di Kelas Reguler',
            'Tidak Diterima',
        ];

        return Action::make('ubah_formulir_pendaftaran')
            ->label('Ubah')
            ->icon('heroicon-m-pencil-square')
            ->url($this->getFormulirUrl($calonSiswa, 'edit'))
            ->color('success')
            ->outlined()
            ->hidden(
                ! $this->isCalonSiswa()
                    || $calonSiswa === null
                    || in_array($calonSiswa->status_pendaftaran, $blockedStatuses)
            )
            ->successRedirectUrl($this->getFormulirUrl($calonSiswa, 'view'));
    }

    private function getExportAction(): ExportAction
    {
        return ExportAction::make('export')
            ->label('Ekspor')
            ->outlined()
            ->icon('heroicon-m-cloud-arrow-down')
            ->color('success')
            ->exporter(CalonSiswaExporter::class)
            ->chunkSize(250)
            ->visible(fn () => CalonSiswa::count() > 0 && ! $this->isCalonSiswa());
    }

    private function getImportAction(): ImportAction
    {
        return ImportAction::make('import')
            ->label('Import')
            ->outlined()
            ->icon('heroicon-m-cloud-arrow-up')
            ->color(Color::Cyan)
            ->importer(CalonSiswaImporter::class)
            ->chunkSize(250)
            ->visible(function () {
                if (! $this->isSuperAdmin()) {
                    return false;
                }

                $tahunPendaftaran = DB::table('tahun_pendaftarans')
                    ->where('status', 'Aktif')
                    ->first();

                return $tahunPendaftaran && CalonSiswa::count() > 0;
            });
    }
}

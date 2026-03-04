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
        if (Auth::check()) {
            $calonSiswa = CalonSiswa::where('nisn', Auth::user()->username)->first();
            $urlCreate = '/formulir/create';
            $urlView = '';
            $urlEdit = '';

            if ($calonSiswa) {
                $urlView = "/formulir/{$calonSiswa->id}";
                $urlEdit = "/formulir/{$calonSiswa->id}/edit";
            }
        }

        return [
            // Daftar Sekarang
            Action::make('buat_formulir_pendaftaran')
                ->label('Daftar Sekarang 🚀')
                ->icon('heroicon-o-clipboard-document-list')
                ->outlined()
                ->color('primary')
                ->url($urlCreate)
                ->hidden(Auth::user()->roles->first()->name !== 'peserta' || $calonSiswa !== null),

            // Lihat Formulir
            Action::make('lihat_formulir_pendaftaran')
                ->label('Lihat')
                ->icon('heroicon-m-eye')
                ->outlined()
                ->url($urlView)
                ->color(Color::Zinc)
                ->hidden(
                    Auth::user()->roles->first()->name !== 'peserta' || $calonSiswa === null || $calonSiswa->status_pendaftaran === 'Diproses' || $calonSiswa->status_pendaftaran === 'Berkas Tidak Lengkap'
                ),

            // Edit Formulir
            Action::make('ubah_formulir_pendaftaran')
                ->label('Ubah')
                ->icon('heroicon-m-pencil-square')
                ->url($urlEdit)
                ->color('success')
                ->outlined()
                ->hidden(
                    Auth::user()->roles->first()->name !== 'peserta' || $calonSiswa === null || $calonSiswa->status_pendaftaran === 'Diterima' || $calonSiswa->status_pendaftaran === 'Diterima Di Kelas Unggulan' || $calonSiswa->status_pendaftaran === 'Diterima Di Kelas Reguler' || $calonSiswa->status_pendaftaran === 'Diverifikasi' || $calonSiswa->status_pendaftaran === 'Ditolak'
                )
                ->successRedirectUrl($urlView),

            // Export
            ExportAction::make('export')
                ->label('Ekspor')
                ->outlined()
                ->icon('heroicon-m-cloud-arrow-down')
                ->color('success')
                ->exporter(CalonSiswaExporter::class)
                ->chunkSize(250)
                ->visible(fn (): string => CalonSiswa::count() > 0 && Auth::user()->roles->first()->name !== 'peserta'),

            // Import
            ImportAction::make('import')
                ->label('Import')
                ->outlined()
                ->icon('heroicon-m-cloud-arrow-up')
                ->color(Color::Cyan)
                ->importer(CalonSiswaImporter::class)
                ->chunkSize(250)
                ->visible(function () {
                    $tahunPendaftaran = DB::table('tahun_pendaftarans')
                        ->where('status', 'Aktif')
                        ->first();

                    // Pastikan hanya menampilkan jika tahun pendaftaran aktif ditemukan
                    return $tahunPendaftaran && CalonSiswa::count() > 0 && optional(Auth::user()->roles->first())->name === 'administrator';
                }),
        ];
    }
}

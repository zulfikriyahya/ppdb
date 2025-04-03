<?php

namespace App\Filament\Resources\CalonSiswaResource\Pages;

use App\Filament\Exports\CalonSiswaExporter;
use App\Filament\Resources\CalonSiswaResource;
use App\Models\CalonSiswa;
use Filament\Actions\Action;
use Filament\Actions\ExportAction;
use Filament\Resources\Pages\ListRecords;
use Filament\Support\Colors\Color;
use Illuminate\Support\Facades\Auth;

class ListCalonSiswas extends ListRecords
{
    protected static string $resource = CalonSiswaResource::class;

    protected function getShieldRedirectPath(): string
    {
        return '/'; // redirect to the root index...
    }

    protected function getHeaderActions(): array
    {
        if (Auth::check()) {
            $calonSiswa = CalonSiswa::where('nisn', Auth::user()->username)->first();
            $urlCreate = '/formulir/create';
            $urlView = '';
            $urlEdit = '';
            $label = $calonSiswa ? $calonSiswa->status_pendaftaran : '';

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
                ->hidden(Auth::user()->username === 'administrator' || $calonSiswa !== null),

            // Lihat Formulir
            Action::make('lihat_formulir_pendaftaran')
                ->label('Lihat')
                ->icon('heroicon-m-eye')
                ->outlined()
                ->url($urlView)
                ->color(Color::Zinc)
                ->hidden(
                    Auth::user()->username === 'administrator' || $calonSiswa === null || $calonSiswa->status_pendaftaran === 'Diproses' || $calonSiswa->status_pendaftaran === 'Berkas Tidak Lengkap'
                ),

            // Edit Formulir
            Action::make('ubah_formulir_pendaftaran')
                ->label('Ubah')
                ->icon('heroicon-m-pencil-square')
                ->url($urlEdit)
                ->color('success')
                ->outlined()
                ->hidden(
                    Auth::user()->username === 'administrator' || $calonSiswa === null || $calonSiswa->status_pendaftaran === 'Diterima' || $calonSiswa->status_pendaftaran === 'Diterima Di Kelas Unggulan' || $calonSiswa->status_pendaftaran === 'Diterima Di Kelas Reguler' || $calonSiswa->status_pendaftaran === 'Diverifikasi' || $calonSiswa->status_pendaftaran === 'Ditolak'
                )
                ->successRedirectUrl($urlView),

            // Status Pendaftaran === Ditampilkan ketika Waktu Pengumuman
            // Action::make('status_pendaftaran')
            //     ->label($label)
            //     ->color(function () {
            //         $calonSiswa = CalonSiswa::where('nisn', Auth::user()->username)->first();

            //         if (!$calonSiswa) {
            //             return 'warning'; // Default jika data calon siswa tidak ditemukan
            //         }

            //         $status = $calonSiswa->status_pendaftaran;

            //         if ($status === 'Diproses') {
            //             return 'warning';
            //         } elseif ($status === 'Diverifikasi') {
            //             return 'success';
            //         } elseif ($status === 'Berkas Tidak Lengkap') {
            //             return 'warning';
            //         } elseif ($status === 'Ditolak') {
            //             return 'danger';
            //         } elseif ($status === 'Diterima') {
            //             return 'success';
            //         } elseif ($status === 'Diterima Di Kelas Reguler') {
            //             return 'success';
            //         } elseif ($status === 'Diterima Di Kelas Unggulan') {
            //             return 'info';
            //         }
            //         return 'warning';
            //     })
            //     ->icon(function () {
            //         $calonSiswa = CalonSiswa::where('nisn', Auth::user()->username)->first();

            //         if (!$calonSiswa) {
            //             return 'heroicon-o-arrow-path'; // Default jika data calon siswa tidak ditemukan
            //         }

            //         $status = $calonSiswa->status_pendaftaran;

            //         if ($status === 'Diproses') {
            //             return 'heroicon-o-arrow-path';
            //         } elseif ($status === 'Diverifikasi') {
            //             return 'heroicon-o-clipboard-document-check';
            //         } elseif ($status === 'Berkas Tidak Lengkap') {
            //             return 'heroicon-o-document-minus';
            //         } elseif ($status === 'Ditolak') {
            //             return 'heroicon-o-no-symbol';
            //         } elseif ($status === 'Diterima') {
            //             return 'heroicon-o-check-circle';
            //         } elseif ($status === 'Diterima Di Kelas Reguler') {
            //             return 'heroicon-o-shield-check';
            //         } elseif ($status === 'Diterima Di Kelas Unggulan') {
            //             return 'heroicon-o-shield-check';
            //         }
            //         return 'gray';
            //     })
            //     // ->outlined()
            //     ->size('sm')
            //     ->disabled()
            //     ->hidden(Auth::user()->username === 'administrator' || $calonSiswa === null || $calonSiswa->status_pendaftaran === 'Diterima' || $calonSiswa->status_pendaftaran === 'Diterima Di Kelas Unggulan' || $calonSiswa->status_pendaftaran === 'Diterima Di Kelas Reguler' || $calonSiswa->status_pendaftaran === 'Ditolak'),

            // Export
            ExportAction::make('Ekspor')
                ->label('Ekspor')
                ->icon('heroicon-m-cloud-arrow-down')
                ->color('success')
                ->exporter(CalonSiswaExporter::class)
                ->chunkSize(250)
                ->visible(fn (): string => CalonSiswa::count() > 0 && Auth::user()->username === 'administrator'),
        ];
    }
}

<?php

namespace App\Filament\Resources\CalonSiswaResource\Pages;

use Carbon\Carbon;
use App\Models\CalonSiswa;
use Filament\Actions\Action;
use Filament\Actions\ExportAction;
use Filament\Support\Colors\Color;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Filament\Resources\Pages\ListRecords;
use App\Filament\Exports\CalonSiswaExporter;
use App\Filament\Resources\CalonSiswaResource;

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
                ->label('Daftar Sekarang')
                ->icon('heroicon-m-plus')
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
            Action::make('status_pendaftaran')
                ->label($label)
                ->color(function () {
                    $calonSiswa = CalonSiswa::where('nisn', Auth::user()->username)->first();

                    if (!$calonSiswa) {
                        return 'warning'; // Default jika data calon siswa tidak ditemukan
                    }

                    $status = $calonSiswa->status_pendaftaran;

                    if ($status === 'Diproses') {
                        return 'warning';
                    } elseif ($status === 'Diverifikasi') {
                        return 'success';
                    } elseif ($status === 'Berkas Tidak Lengkap') {
                        return 'warning';
                    } elseif ($status === 'Ditolak') {
                        return 'danger';
                    } elseif ($status === 'Diterima') {
                        return 'success';
                    } elseif ($status === 'Diterima Di Kelas Reguler') {
                        return 'success';
                    } elseif ($status === 'Diterima Di Kelas Unggulan') {
                        return 'info';
                    }
                    return 'warning';
                })
                ->icon(function () {
                    $calonSiswa = CalonSiswa::where('nisn', Auth::user()->username)->first();

                    if (!$calonSiswa) {
                        return 'heroicon-o-arrow-path'; // Default jika data calon siswa tidak ditemukan
                    }

                    $status = $calonSiswa->status_pendaftaran;

                    if ($status === 'Diproses') {
                        return 'heroicon-o-arrow-path';
                    } elseif ($status === 'Diverifikasi') {
                        return 'heroicon-o-clipboard-document-check';
                    } elseif ($status === 'Berkas Tidak Lengkap') {
                        return 'heroicon-o-document-minus';
                    } elseif ($status === 'Ditolak') {
                        return 'heroicon-o-no-symbol';
                    } elseif ($status === 'Diterima') {
                        return 'heroicon-o-check-circle';
                    } elseif ($status === 'Diterima Di Kelas Reguler') {
                        return 'heroicon-o-shield-check';
                    } elseif ($status === 'Diterima Di Kelas Unggulan') {
                        return 'heroicon-o-shield-check';
                    }
                    return 'gray';
                })
                // ->outlined()
                ->disabled()
                ->hidden(Auth::user()->username === 'administrator' || $calonSiswa === null || $calonSiswa->status_pendaftaran === 'Diterima' || $calonSiswa->status_pendaftaran === 'Diterima Di Kelas Unggulan' || $calonSiswa->status_pendaftaran === 'Diterima Di Kelas Reguler' || $calonSiswa->status_pendaftaran === 'Ditolak'),
            // ->hidden(function () {
            //     $tahunPendaftaran = DB::table('tahun_pendaftarans')
            //         ->where('status', 'Aktif')
            //         ->first();
            //     $sekarang = Carbon::now();

            //     $calonSiswa = CalonSiswa::where('nisn', Auth::user()->username)->first();

            //     $status = $calonSiswa->status_pendaftaran === 'Diproses' ||
            //         $calonSiswa->status_pendaftaran === 'Berkas Tidak Lengkap';

            //     $mulaiPengumumanPrestasi = ! empty($tahunPendaftaran->tanggal_pengumuman_jalur_prestasi_mulai)
            //         ? Carbon::createFromFormat('Y-m-d H:i:s', trim($tahunPendaftaran->tanggal_pengumuman_jalur_prestasi_mulai))
            //         : null;

            //     $akhirPengumumanPrestasi = ! empty($tahunPendaftaran->tanggal_pengumuman_jalur_prestasi_selesai)
            //         ? Carbon::createFromFormat('Y-m-d H:i:s', trim($tahunPendaftaran->tanggal_pengumuman_jalur_prestasi_selesai))
            //         : null;

            //     $mulaiPengumumanReguler = ! empty($tahunPendaftaran->tanggal_pengumuman_jalur_reguler_mulai)
            //         ? Carbon::createFromFormat('Y-m-d H:i:s', trim($tahunPendaftaran->tanggal_pengumuman_jalur_reguler_mulai))
            //         : null;

            //     $akhirPengumumanReguler = ! empty($tahunPendaftaran->tanggal_pengumuman_jalur_reguler_selesai)
            //         ? Carbon::createFromFormat('Y-m-d H:i:s', trim($tahunPendaftaran->tanggal_pengumuman_jalur_reguler_selesai))
            //         : null;

            //     $mulaiPengumumanAfirmasi = ! empty($tahunPendaftaran->tanggal_pengumuman_jalur_afirmasi_mulai)
            //         ? Carbon::createFromFormat('Y-m-d H:i:s', trim($tahunPendaftaran->tanggal_pengumuman_jalur_afirmasi_mulai))
            //         : null;

            //     $akhirPengumumanAfirmasi = ! empty($tahunPendaftaran->tanggal_pengumuman_jalur_afirmasi_selesai)
            //         ? Carbon::createFromFormat('Y-m-d H:i:s', trim($tahunPendaftaran->tanggal_pengumuman_jalur_afirmasi_selesai))
            //         : null;

            //     $mulaiPengumumanZonasi = ! empty($tahunPendaftaran->tanggal_pengumuman_jalur_zonasi_mulai)
            //         ? Carbon::createFromFormat('Y-m-d H:i:s', trim($tahunPendaftaran->tanggal_pengumuman_jalur_zonasi_mulai))
            //         : null;

            //     $akhirPengumumanZonasi = ! empty($tahunPendaftaran->tanggal_pengumuman_jalur_zonasi_selesai)
            //         ? Carbon::createFromFormat('Y-m-d H:i:s', trim($tahunPendaftaran->tanggal_pengumuman_jalur_zonasi_selesai))
            //         : null;

            //     $mulaiPengumumanMutasi = ! empty($tahunPendaftaran->tanggal_pengumuman_jalur_mutasi_mulai)
            //         ? Carbon::createFromFormat('Y-m-d H:i:s', trim($tahunPendaftaran->tanggal_pengumuman_jalur_mutasi_mulai))
            //         : null;

            //     $akhirPengumumanMutasi = ! empty($tahunPendaftaran->tanggal_pengumuman_jalur_mutasi_selesai)
            //         ? Carbon::createFromFormat('Y-m-d H:i:s', trim($tahunPendaftaran->tanggal_pengumuman_jalur_mutasi_selesai))
            //         : null;

            //     $periodePengumuman = [
            //         [$mulaiPengumumanPrestasi, $akhirPengumumanPrestasi],
            //         [$mulaiPengumumanReguler, $akhirPengumumanReguler],
            //         [$mulaiPengumumanAfirmasi, $akhirPengumumanAfirmasi],
            //         [$mulaiPengumumanZonasi, $akhirPengumumanZonasi],
            //         [$mulaiPengumumanMutasi, $akhirPengumumanMutasi],
            //     ];

            //     foreach ($periodePengumuman as [$mulai, $selesai]) {
            //         if ($sekarang >= $mulai && $sekarang <= $selesai && $status) {
            //             return false;
            //         }
            //     }

            //     return true;
            // }),



            // Export
            ExportAction::make('Ekspor')
                ->label('Ekspor')
                ->icon('heroicon-m-cloud-arrow-down')
                ->color('success')
                ->exporter(CalonSiswaExporter::class)
                ->chunkSize(250)
                ->visible(fn(): string => CalonSiswa::count() > 0 && Auth::user()->username === 'administrator'),
        ];
    }
}

<?php

namespace App\Filament\Resources\CalonSiswaResource\Pages;

use Carbon\Carbon;
use App\Models\CalonSiswa;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Filament\Resources\Pages\ViewRecord;
use App\Filament\Resources\CalonSiswaResource;
use Torgodly\Html2Media\Actions\Html2MediaAction;

class ViewCalonSiswa extends ViewRecord
{
    protected static string $resource = CalonSiswaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            // Formulir
            Html2MediaAction::make('cetak_formulir')
                ->label('Formulir')
                ->outlined()
                ->icon('heroicon-o-printer')
                ->scale(2)
                ->print() // Enable print option
                // ->preview() // Enable preview option
                ->filename('formulir.pdf') // Custom file name
                ->savePdf() // Enable save as PDF option
                ->requiresConfirmation() // Show confirmation modal
                // ->pagebreak('section', ['css', 'legacy'])
                ->orientation('portrait') // Portrait orientation
                ->format('a4', 'mm') // A4 format with mm units
                ->enableLinks() // Enable links in PDF
                ->margin([10, 20, 10, 20]) // Set custom margins
                ->content(fn($record) => view('formulir', ['record' => $record])), // Set Content

            // Kartu Tes
            Html2MediaAction::make('cetak_kartu_tes')
                ->label('Kartu Tes')
                ->outlined()
                ->icon('heroicon-o-printer')
                ->scale(2)
                ->print() // Enable print option
                // ->preview() // Enable preview option
                ->filename('Kartu Tes.pdf') // Custom file name
                ->savePdf() // Enable save as PDF option
                ->requiresConfirmation() // Show confirmation modal
                // ->pagebreak('section', ['css', 'legacy'])
                ->orientation('portrait') // Portrait orientation
                ->format('a4', 'mm') // A4 format with mm units
                ->enableLinks() // Enable links in PDF
                ->margin([10, 20, 10, 20]) // Set custom margins
                ->content(fn($record) => view('kartu-tes', ['record' => $record])) // Set content
                ->visible(function () {
                    $tahunPendaftaran = DB::table('tahun_pendaftarans')
                        ->where('status', 'Aktif')
                        ->first();
                    $currentDate = Carbon::now();
                    $startDate = Carbon::createFromFormat('Y-m-d H:i:s', trim($tahunPendaftaran->tanggal_penerbitan_kartu_tes_mulai));
                    $endDate = Carbon::createFromFormat('Y-m-d H:i:s', trim($tahunPendaftaran->tanggal_penerbitan_kartu_tes_selesai));

                    if ($currentDate->lt($startDate) || $currentDate->gt($endDate)) {
                        return false;
                    }
                    return true;
                }),

            // SKL
            Html2MediaAction::make('cetak_skl')
                ->outlined()
                ->label('SKL')
                ->icon('heroicon-o-printer')
                ->scale(2)
                ->print() // Enable print option
                // ->preview() // Enable preview option
                ->filename('Surat Keterangan Kelulusan.pdf') // Custom file name
                ->savePdf() // Enable save as PDF option
                ->requiresConfirmation() // Show confirmation modal
                // ->pagebreak('section', ['css', 'legacy'])
                ->orientation('portrait') // Portrait orientation
                ->format('a4', 'mm') // A4 format with mm units
                ->enableLinks() // Enable links in PDF
                ->margin([10, 20, 10, 20]) // Set custom margins
                ->content(fn($record) => view('skl', ['record' => $record])) // Set content
                ->visible(function () {
                    $tahunPendaftaran = DB::table('tahun_pendaftarans')
                        ->where('status', 'Aktif')
                        ->first();
                    $currentDate = Carbon::now();

                    $mulaiPengumumanPrestasi = !empty($tahunPendaftaran->tanggal_pengumuman_jalur_prestasi_mulai)
                        ? Carbon::createFromFormat('Y-m-d H:i:s', trim($tahunPendaftaran->tanggal_pengumuman_jalur_prestasi_mulai))
                        : null;

                    $akhirPengumumanPrestasi = !empty($tahunPendaftaran->tanggal_pengumuman_jalur_prestasi_selesai)
                        ? Carbon::createFromFormat('Y-m-d H:i:s', trim($tahunPendaftaran->tanggal_pengumuman_jalur_prestasi_selesai))
                        : null;

                    $mulaiPengumumanReguler = !empty($tahunPendaftaran->tanggal_pengumuman_jalur_reguler_mulai)
                        ? Carbon::createFromFormat('Y-m-d H:i:s', trim($tahunPendaftaran->tanggal_pengumuman_jalur_reguler_mulai))
                        : null;

                    $akhirPengumumanReguler = !empty($tahunPendaftaran->tanggal_pengumuman_jalur_reguler_selesai)
                        ? Carbon::createFromFormat('Y-m-d H:i:s', trim($tahunPendaftaran->tanggal_pengumuman_jalur_reguler_selesai))
                        : null;

                    $mulaiPengumumanAfirmasi = !empty($tahunPendaftaran->tanggal_pengumuman_jalur_afirmasi_mulai)
                        ? Carbon::createFromFormat('Y-m-d H:i:s', trim($tahunPendaftaran->tanggal_pengumuman_jalur_afirmasi_mulai))
                        : null;

                    $akhirPengumumanAfirmasi = !empty($tahunPendaftaran->tanggal_pengumuman_jalur_afirmasi_selesai)
                        ? Carbon::createFromFormat('Y-m-d H:i:s', trim($tahunPendaftaran->tanggal_pengumuman_jalur_afirmasi_selesai))
                        : null;

                    $mulaiPengumumanZonasi = !empty($tahunPendaftaran->tanggal_pengumuman_jalur_zonasi_mulai)
                        ? Carbon::createFromFormat('Y-m-d H:i:s', trim($tahunPendaftaran->tanggal_pengumuman_jalur_zonasi_mulai))
                        : null;

                    $akhirPengumumanZonasi = !empty($tahunPendaftaran->tanggal_pengumuman_jalur_zonasi_selesai)
                        ? Carbon::createFromFormat('Y-m-d H:i:s', trim($tahunPendaftaran->tanggal_pengumuman_jalur_zonasi_selesai))
                        : null;

                    $mulaiPengumumanMutasi = !empty($tahunPendaftaran->tanggal_pengumuman_jalur_mutasi_mulai)
                        ? Carbon::createFromFormat('Y-m-d H:i:s', trim($tahunPendaftaran->tanggal_pengumuman_jalur_mutasi_mulai))
                        : null;

                    $akhirPengumumanMutasi = !empty($tahunPendaftaran->tanggal_pengumuman_jalur_mutasi_selesai)
                        ? Carbon::createFromFormat('Y-m-d H:i:s', trim($tahunPendaftaran->tanggal_pengumuman_jalur_mutasi_selesai))
                        : null;

                    if (
                        ($mulaiPengumumanPrestasi === null || $akhirPengumumanPrestasi === null ||
                            $currentDate->lt($mulaiPengumumanPrestasi) || $currentDate->gt($akhirPengumumanPrestasi))
                    ) {
                        return false;
                    } elseif (
                        ($mulaiPengumumanReguler === null || $akhirPengumumanReguler === null ||
                            $currentDate->lt($mulaiPengumumanReguler) || $currentDate->gt($akhirPengumumanReguler))
                    ) {
                        return false;
                    } elseif (
                        ($mulaiPengumumanAfirmasi === null || $akhirPengumumanAfirmasi === null ||
                            $currentDate->lt($mulaiPengumumanAfirmasi) || $currentDate->gt($akhirPengumumanAfirmasi))
                    ) {
                        return false;
                    } elseif (
                        ($mulaiPengumumanZonasi === null || $akhirPengumumanZonasi === null ||
                            $currentDate->lt($mulaiPengumumanZonasi) || $currentDate->gt($akhirPengumumanZonasi))
                    ) {
                        return false;
                    } elseif (
                        $mulaiPengumumanMutasi === null || $akhirPengumumanMutasi === null ||
                        $currentDate->lt($mulaiPengumumanMutasi) || $currentDate->gt($akhirPengumumanMutasi)
                    ) {
                        return false;
                    }
                    return true;
                }),

            // Pakta Integritas
            Html2MediaAction::make('cetak_pakta_integritas')
                ->label('Pakta Integritas')
                ->outlined()
                ->icon('heroicon-o-printer')
                ->scale(2)
                ->print() // Enable print option
                // ->preview() // Enable preview option
                ->filename('Pakta Integritas.pdf') // Custom file name
                ->savePdf() // Enable save as PDF option
                ->requiresConfirmation() // Show confirmation modal
                // ->pagebreak('section', ['css', 'legacy'])
                ->orientation('portrait') // Portrait orientation
                ->format('a4', 'mm') // A4 format with mm units
                ->enableLinks() // Enable links in PDF
                ->margin([10, 20, 10, 20]) // Set custom margins
                ->content(fn($record) => view('pakta-integritas', ['record' => $record])) // Set content
                ->hidden(function () {
                    $tahunPendaftaran = DB::table('tahun_pendaftarans')
                        ->where('status', 'Aktif')
                        ->first();
                    $currentDate = Carbon::now();

                    $mulaiPengumumanPrestasi = !empty($tahunPendaftaran->tanggal_pengumuman_jalur_prestasi_mulai)
                        ? Carbon::createFromFormat('Y-m-d H:i:s', trim($tahunPendaftaran->tanggal_pengumuman_jalur_prestasi_mulai))
                        : null;

                    $akhirPengumumanPrestasi = !empty($tahunPendaftaran->tanggal_pengumuman_jalur_prestasi_selesai)
                        ? Carbon::createFromFormat('Y-m-d H:i:s', trim($tahunPendaftaran->tanggal_pengumuman_jalur_prestasi_selesai))
                        : null;

                    $mulaiPengumumanReguler = !empty($tahunPendaftaran->tanggal_pengumuman_jalur_reguler_mulai)
                        ? Carbon::createFromFormat('Y-m-d H:i:s', trim($tahunPendaftaran->tanggal_pengumuman_jalur_reguler_mulai))
                        : null;

                    $akhirPengumumanReguler = !empty($tahunPendaftaran->tanggal_pengumuman_jalur_reguler_selesai)
                        ? Carbon::createFromFormat('Y-m-d H:i:s', trim($tahunPendaftaran->tanggal_pengumuman_jalur_reguler_selesai))
                        : null;

                    $mulaiPengumumanAfirmasi = !empty($tahunPendaftaran->tanggal_pengumuman_jalur_afirmasi_mulai)
                        ? Carbon::createFromFormat('Y-m-d H:i:s', trim($tahunPendaftaran->tanggal_pengumuman_jalur_afirmasi_mulai))
                        : null;

                    $akhirPengumumanAfirmasi = !empty($tahunPendaftaran->tanggal_pengumuman_jalur_afirmasi_selesai)
                        ? Carbon::createFromFormat('Y-m-d H:i:s', trim($tahunPendaftaran->tanggal_pengumuman_jalur_afirmasi_selesai))
                        : null;

                    $mulaiPengumumanZonasi = !empty($tahunPendaftaran->tanggal_pengumuman_jalur_zonasi_mulai)
                        ? Carbon::createFromFormat('Y-m-d H:i:s', trim($tahunPendaftaran->tanggal_pengumuman_jalur_zonasi_mulai))
                        : null;

                    $akhirPengumumanZonasi = !empty($tahunPendaftaran->tanggal_pengumuman_jalur_zonasi_selesai)
                        ? Carbon::createFromFormat('Y-m-d H:i:s', trim($tahunPendaftaran->tanggal_pengumuman_jalur_zonasi_selesai))
                        : null;

                    $mulaiPengumumanMutasi = !empty($tahunPendaftaran->tanggal_pengumuman_jalur_mutasi_mulai)
                        ? Carbon::createFromFormat('Y-m-d H:i:s', trim($tahunPendaftaran->tanggal_pengumuman_jalur_mutasi_mulai))
                        : null;

                    $akhirPengumumanMutasi = !empty($tahunPendaftaran->tanggal_pengumuman_jalur_mutasi_selesai)
                        ? Carbon::createFromFormat('Y-m-d H:i:s', trim($tahunPendaftaran->tanggal_pengumuman_jalur_mutasi_selesai))
                        : null;

                    if (
                        // $mulaiPengumumanPrestasi === null || $akhirPengumumanPrestasi === null || $mulaiPengumumanReguler === null || $akhirPengumumanReguler === null || $mulaiPengumumanAfirmasi === null || $akhirPengumumanAfirmasi === null || $mulaiPengumumanZonasi === null || $akhirPengumumanZonasi === null || $mulaiPengumumanMutasi === null || $akhirPengumumanMutasi === null ||
                        $currentDate >= $mulaiPengumumanPrestasi ||
                        $currentDate <= $akhirPengumumanPrestasi ||

                        $currentDate >= $mulaiPengumumanReguler ||
                        $currentDate <= $akhirPengumumanReguler ||

                        $currentDate >= $mulaiPengumumanAfirmasi ||
                        $currentDate <= $akhirPengumumanAfirmasi ||

                        $currentDate >= $mulaiPengumumanZonasi ||
                        $currentDate <= $akhirPengumumanZonasi ||

                        $currentDate >= $mulaiPengumumanMutasi ||
                        $currentDate <= $akhirPengumumanMutasi
                    ) {
                        return false;
                    }
                }),
        ];
    }
}

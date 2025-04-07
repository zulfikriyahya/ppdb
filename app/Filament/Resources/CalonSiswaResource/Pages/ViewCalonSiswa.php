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
                ->filename(fn($record) => 'Formulir_' . $record->nama . '_' . $record->nisn . '.pdf')
                ->savePdf()
                // ->pagebreak('section', ['css', 'legacy'])
                ->orientation('portrait')
                ->format('a4', 'mm')
                ->enableLinks()
                ->margin([10, 10, 10, 10])
                ->content(fn($record) => view('formulir', ['record' => $record]))
                ->visible(function () {
                    $calonSiswa = optional(CalonSiswa::where('nisn', Auth::user()->username)->first());

                    if (!$calonSiswa->exists) {
                        return 'warning'; // Default jika data calon siswa tidak ditemukan
                    }

                    return !in_array($calonSiswa->status_pendaftaran, ['Diproses', 'Ditolak', 'Berkas Tidak Lengkap']);
                }),

            // Kartu Tes
            Html2MediaAction::make('cetak_kartu_tes')
                ->label('Kartu Tes')
                ->outlined()
                ->icon('heroicon-o-printer')
                ->filename(fn($record) => 'Kartu Tes_' . $record->nama . '_' . $record->nisn . '.pdf')
                ->savePdf()
                // ->pagebreak('section', ['css', 'legacy'])
                ->orientation('portrait')
                ->format('a4', 'mm')
                ->enableLinks()
                ->margin([10, 10, 10, 10])
                ->content(fn($record) => view('kartu-tes', ['record' => $record])) // Set content
                ->visible(function () {
                    $tahunPendaftaran = DB::table('tahun_pendaftarans')
                        ->where('status', 'Aktif')
                        ->first();

                    // Jika objek tidak ada atau salah satu properti kosong, langsung return false
                    if (
                        ! optional($tahunPendaftaran)->tanggal_penerbitan_kartu_tes_mulai ||
                        ! optional($tahunPendaftaran)->tanggal_penerbitan_kartu_tes_selesai
                    ) {
                        return false;
                    }

                    try {
                        $startDate = Carbon::createFromFormat('Y-m-d H:i:s', trim($tahunPendaftaran->tanggal_penerbitan_kartu_tes_mulai));
                        $endDate = Carbon::createFromFormat('Y-m-d H:i:s', trim($tahunPendaftaran->tanggal_penerbitan_kartu_tes_selesai));
                    } catch (\Exception $e) {
                        return false;
                    }

                    return Carbon::now()->between($startDate, $endDate);
                }),

            // SKL/Hasil
            Html2MediaAction::make('cetak_skl')
                ->label('Hasil')
                ->outlined()
                ->icon('heroicon-o-printer')
                ->filename(fn($record) => 'Hasil_' . $record->nama . '_' . $record->nisn . '.pdf')
                ->savePdf()
                // ->pagebreak('section', ['css', 'legacy'])
                ->orientation('portrait')
                ->format('a4', 'mm')
                ->enableLinks()
                ->margin([10, 10, 10, 10])
                ->content(fn($record) => view('skl', ['record' => $record])) // Set content
                ->hidden(function () {
                    $tahunPendaftaran = DB::table('tahun_pendaftarans')
                        ->where('status', 'Aktif')
                        ->first();

                    $sekarang = Carbon::now();

                    $mulaiPengumumanPrestasi = optional($tahunPendaftaran)->tanggal_pengumuman_jalur_prestasi_mulai
                        ? Carbon::createFromFormat('Y-m-d H:i:s', trim($tahunPendaftaran->tanggal_pengumuman_jalur_prestasi_mulai))
                        : null;

                    $akhirPengumumanPrestasi = optional($tahunPendaftaran)->tanggal_pengumuman_jalur_prestasi_selesai
                        ? Carbon::createFromFormat('Y-m-d H:i:s', trim($tahunPendaftaran->tanggal_pengumuman_jalur_prestasi_selesai))
                        : null;

                    $mulaiPengumumanReguler = optional($tahunPendaftaran)->tanggal_pengumuman_jalur_reguler_mulai
                        ? Carbon::createFromFormat('Y-m-d H:i:s', trim($tahunPendaftaran->tanggal_pengumuman_jalur_reguler_mulai))
                        : null;

                    $akhirPengumumanReguler = optional($tahunPendaftaran)->tanggal_pengumuman_jalur_reguler_selesai
                        ? Carbon::createFromFormat('Y-m-d H:i:s', trim($tahunPendaftaran->tanggal_pengumuman_jalur_reguler_selesai))
                        : null;

                    $mulaiPengumumanAfirmasi = optional($tahunPendaftaran)->tanggal_pengumuman_jalur_afirmasi_mulai
                        ? Carbon::createFromFormat('Y-m-d H:i:s', trim($tahunPendaftaran->tanggal_pengumuman_jalur_afirmasi_mulai))
                        : null;

                    $akhirPengumumanAfirmasi = optional($tahunPendaftaran)->tanggal_pengumuman_jalur_afirmasi_selesai
                        ? Carbon::createFromFormat('Y-m-d H:i:s', trim($tahunPendaftaran->tanggal_pengumuman_jalur_afirmasi_selesai))
                        : null;

                    $mulaiPengumumanZonasi = optional($tahunPendaftaran)->tanggal_pengumuman_jalur_zonasi_mulai
                        ? Carbon::createFromFormat('Y-m-d H:i:s', trim($tahunPendaftaran->tanggal_pengumuman_jalur_zonasi_mulai))
                        : null;

                    $akhirPengumumanZonasi = optional($tahunPendaftaran)->tanggal_pengumuman_jalur_zonasi_selesai
                        ? Carbon::createFromFormat('Y-m-d H:i:s', trim($tahunPendaftaran->tanggal_pengumuman_jalur_zonasi_selesai))
                        : null;

                    $mulaiPengumumanMutasi = optional($tahunPendaftaran)->tanggal_pengumuman_jalur_mutasi_mulai
                        ? Carbon::createFromFormat('Y-m-d H:i:s', trim($tahunPendaftaran->tanggal_pengumuman_jalur_mutasi_mulai))
                        : null;

                    $akhirPengumumanMutasi = optional($tahunPendaftaran)->tanggal_pengumuman_jalur_mutasi_selesai
                        ? Carbon::createFromFormat('Y-m-d H:i:s', trim($tahunPendaftaran->tanggal_pengumuman_jalur_mutasi_selesai))
                        : null;

                    $periodePengumuman = [
                        [$mulaiPengumumanPrestasi, $akhirPengumumanPrestasi],
                        [$mulaiPengumumanReguler, $akhirPengumumanReguler],
                        [$mulaiPengumumanAfirmasi, $akhirPengumumanAfirmasi],
                        [$mulaiPengumumanZonasi, $akhirPengumumanZonasi],
                        [$mulaiPengumumanMutasi, $akhirPengumumanMutasi],
                    ];

                    foreach ($periodePengumuman as [$mulai, $selesai]) {
                        if ($sekarang >= $mulai && $sekarang <= $selesai) {
                            return false;
                        }
                    }

                    return true;
                })
        ];
    }
}

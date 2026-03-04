<?php

namespace Database\Seeders;

use App\Models\TahunPendaftaran;
use Illuminate\Database\Seeder;

class TahunPendaftaranSeeder extends Seeder
{
    public function run(): void
    {
        TahunPendaftaran::create([
            'nama' => '2026/2027',
            'status' => 'Aktif',

            // Periode PPDB global
            'tanggal_ppdb_mulai' => '2026-01-01 00:00:00',
            'tanggal_ppdb_selesai' => '2026-07-31 23:59:59',

            // Jalur Prestasi
            'tanggal_pendaftaran_jalur_prestasi_mulai' => '2026-01-01 00:00:00',
            'tanggal_pendaftaran_jalur_prestasi_selesai' => '2026-02-28 23:59:59',
            'tanggal_pengumuman_jalur_prestasi_mulai' => '2026-03-01 00:00:00',
            'tanggal_pengumuman_jalur_prestasi_selesai' => '2026-03-07 23:59:59',

            // Jalur Reguler
            'tanggal_pendaftaran_jalur_reguler_mulai' => '2026-03-08 00:00:00',
            'tanggal_pendaftaran_jalur_reguler_selesai' => '2026-04-30 23:59:59',
            'tanggal_pengumuman_jalur_reguler_mulai' => '2026-05-15 00:00:00',
            'tanggal_pengumuman_jalur_reguler_selesai' => '2026-05-20 23:59:59',

            // Jalur Afirmasi
            'tanggal_pendaftaran_jalur_afirmasi_mulai' => '2026-03-08 00:00:00',
            'tanggal_pendaftaran_jalur_afirmasi_selesai' => '2026-04-30 23:59:59',
            'tanggal_pengumuman_jalur_afirmasi_mulai' => '2026-05-15 00:00:00',
            'tanggal_pengumuman_jalur_afirmasi_selesai' => '2026-05-20 23:59:59',

            // Jalur Zonasi
            'tanggal_pendaftaran_jalur_zonasi_mulai' => '2026-03-08 00:00:00',
            'tanggal_pendaftaran_jalur_zonasi_selesai' => '2026-04-30 23:59:59',
            'tanggal_pengumuman_jalur_zonasi_mulai' => '2026-05-15 00:00:00',
            'tanggal_pengumuman_jalur_zonasi_selesai' => '2026-05-20 23:59:59',

            // Jalur Mutasi
            'tanggal_pendaftaran_jalur_mutasi_mulai' => '2026-03-08 00:00:00',
            'tanggal_pendaftaran_jalur_mutasi_selesai' => '2026-04-30 23:59:59',
            'tanggal_pengumuman_jalur_mutasi_mulai' => '2026-05-15 00:00:00',
            'tanggal_pengumuman_jalur_mutasi_selesai' => '2026-05-20 23:59:59',

            // Kartu Tes
            'tanggal_penerbitan_kartu_tes_mulai' => '2026-04-01 00:00:00',
            'tanggal_penerbitan_kartu_tes_selesai' => '2026-04-14 23:59:59',

            // Tes Akademik
            'tanggal_tes_akademik_mulai' => '2026-04-15 07:00:00',
            'tanggal_tes_akademik_selesai' => '2026-04-15 12:00:00',

            // Tes Praktik
            'tanggal_tes_praktik_mulai' => '2026-04-16 07:00:00',
            'tanggal_tes_praktik_selesai' => '2026-04-16 12:00:00',

            // Registrasi Berkas
            'tanggal_registrasi_berkas_mulai' => '2026-05-21 00:00:00',
            'tanggal_registrasi_berkas_selesai' => '2026-06-07 23:59:59',

            'kuantitas' => 320,
        ]);
    }
}

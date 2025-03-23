<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TahunPendaftaranSeeder extends Seeder
{
    public function run(): void
    {
        $dataTahunPendaftaran = [
            // Tahun Pendaftaran 2025/2026
            [
                'id' => '1',
                'nama' => '2025/2026',
                'tanggal_ppdb_mulai' => '2025-02-01',
                'tanggal_ppdb_selesai' => '2025-05-31',
                'tanggal_pendaftaran_jalur_prestasi_mulai' => null,
                'tanggal_pendaftaran_jalur_prestasi_selesai' => null,
                'tanggal_pengumuman_jalur_prestasi_mulai' => null,
                'tanggal_pengumuman_jalur_prestasi_selesai' => null,
                'tanggal_pendaftaran_jalur_reguler_mulai' => null,
                'tanggal_pendaftaran_jalur_reguler_selesai' => null,
                'tanggal_pengumuman_jalur_reguler_mulai' => null,
                'tanggal_pengumuman_jalur_reguler_selesai' => null,
                'tanggal_pendaftaran_jalur_afirmasi_mulai' => null,
                'tanggal_pendaftaran_jalur_afirmasi_selesai' => null,
                'tanggal_pengumuman_jalur_afirmasi_mulai' => null,
                'tanggal_pengumuman_jalur_afirmasi_selesai' => null,
                'tanggal_pendaftaran_jalur_zonasi_mulai' => null,
                'tanggal_pendaftaran_jalur_zonasi_selesai' => null,
                'tanggal_pengumuman_jalur_zonasi_mulai' => null,
                'tanggal_pengumuman_jalur_zonasi_selesai' => null,
                'tanggal_pendaftaran_jalur_mutasi_mulai' => null,
                'tanggal_pendaftaran_jalur_mutasi_selesai' => null,
                'tanggal_pengumuman_jalur_mutasi_mulai' => null,
                'tanggal_pengumuman_jalur_mutasi_selesai' => null,
                'tanggal_penerbitan_kartu_tes_mulai' => null,
                'tanggal_penerbitan_kartu_tes_selesai' => null,
                'tanggal_tes_akademik_mulai' => null,
                'tanggal_tes_akademik_selesai' => null,
                'tanggal_tes_praktik_mulai' => null,
                'tanggal_tes_praktik_selesai' => null,
                'tanggal_registrasi_berkas_mulai' => null,
                'tanggal_registrasi_berkas_selesai' => null,
                'kuantitas' => '5000',
                'status' => 'Aktif',
            ],
        ];

        foreach ($dataTahunPendaftaran as $data) {
            TahunPendaftaran::create($data);
        }
    }
}

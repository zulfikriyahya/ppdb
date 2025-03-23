<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class JalurPendaftaranSeeder extends Seeder
{
    public function run(): void
    {
        $dataJalurPendaftaran = [
            // Tahun Pendaftaran 2025/2026
            [
                'nama' => 'Prestasi',
                'kuantitas' => '1000',
                'status' => 'Aktif',
                'tahun_pendaftaran_id' => 1,
            ],
            [
                'nama' => 'Reguler',
                'kuantitas' => '1000',
                'status' => 'Aktif',
                'tahun_pendaftaran_id' => 1,
            ],
            [
                'nama' => 'Afirmasi',
                'kuantitas' => '1000',
                'status' => 'Nonaktif',
                'tahun_pendaftaran_id' => 1,
            ],
            [
                'nama' => 'Zonasi',
                'kuantitas' => '1000',
                'status' => 'Nonaktif',
                'tahun_pendaftaran_id' => 1,
            ],
            [
                'nama' => 'Mutasi',
                'kuantitas' => '1000',
                'status' => 'Nonaktif',
                'tahun_pendaftaran_id' => 1,
            ],
        ];

        foreach ($dataJalurPendaftaran as $data) {
            JalurPendaftaran::create($data);
        }
    }
}

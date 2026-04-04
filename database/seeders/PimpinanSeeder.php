<?php

namespace Database\Seeders;

use App\Models\Pimpinan;
use Illuminate\Database\Seeder;

class PimpinanSeeder extends Seeder
{
    public function run(): void
    {
        $dataPimpinan = [
            [
                'nama' => 'Hj. Yanti Mariah, S.S., M.Pd.',
                'nip' => '198008072005012006',
                'tahun_pendaftaran_id' => '1',
                'berkas_foto' => '/img/avatar.png',
                'berkas_tte' => '/img/tte.png',
                'berkas_sk' => '/img/logo.png',
                'status' => 'Aktif',
            ],
        ];

        foreach ($dataPimpinan as $data) {
            Pimpinan::create($data);
        }
    }
}

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
                'nama' => 'H. Eman Sulaiman, S.Ag., M.Pd.',
                'nip' => '197006032000031002',
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

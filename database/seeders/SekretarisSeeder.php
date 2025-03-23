<?php

namespace Database\Seeders;

use App\Models\Sekretaris;
use Illuminate\Database\Seeder;

class SekretarisSeeder extends Seeder
{
    public function run(): void
    {
        $dataSekretaris = [
            [
                'nama' => 'Mahbudin, S.Pd.I., M.Pd.',
                'nip' => '',
                'tahun_pendaftaran_id' => '1',
                'berkas_foto' => '/img/avatar.png',
                'berkas_tte' => '/img/tte.png',
                'berkas_sk' => '/img/logo.png',
                'status' => 'Aktif',
            ],
        ];

        foreach ($dataSekretaris as $data) {
            Sekretaris::create($data);
        }
    }
}

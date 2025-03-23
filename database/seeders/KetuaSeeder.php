<?php

namespace Database\Seeders;

use App\Models\Ketua;
use Illuminate\Database\Seeder;

class KetuaSeeder extends Seeder
{
    public function run(): void
    {
        $dataKetua = [
            [
                'nama' => 'Umar Mu\'tamar, S.Ag.',
                'nip' => '',
                'tahun_pendaftaran_id' => '1',
                'berkas_foto' => '/img/avatar.png',
                'berkas_tte' => '/img/tte.png',
                'berkas_sk' => '/img/logo.png',
                'status' => 'Aktif',
            ],
        ];

        foreach ($dataKetua as $data) {
            Ketua::create($data);
        }
    }
}

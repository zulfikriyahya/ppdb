<?php

namespace Database\Seeders;

use App\Models\Bendahara;
use Illuminate\Database\Seeder;

class BendaharaSeeder extends Seeder
{
    public function run(): void
    {
        $dataBendahara = [
            [
                'nama' => 'Didin Rosyidin, S.E., M.A.P.',
                'nip' => '',
                'tahun_pendaftaran_id' => '1',
                'berkas_foto' => '/img/avatar.png',
                'berkas_tte' => '/img/tte.png',
                'berkas_sk' => '/img/logo.png',
                'status' => 'Aktif',
            ],
        ];

        foreach ($dataBendahara as $data) {
            Bendahara::create($data);
        }
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProvinsiSeeder extends Seeder
{
    public function run(): void
    {
        $dataProvinsi = [
            [
                'id' => '3',
                'nama' => 'BANTEN',
                'negara_id' => '1',
            ],
        ];

        foreach ($dataProvinsi as $data) {
            Provinsi::create($data);
        }
    }
}

<?php

namespace Database\Seeders;

use App\Models\Kabupaten;
use Illuminate\Database\Seeder;

class KabupatenSeeder extends Seeder
{
    public function run(): void
    {
        $dataKabupaten = [
            [
                'id' => '33',
                'nama' => 'CILEGON',
                'provinsi_id' => 3,
            ],
            [
                'id' => '34',
                'nama' => 'LEBAK',
                'provinsi_id' => 3,
            ],
            [
                'id' => '35',
                'nama' => 'PANDEGLANG',
                'provinsi_id' => 3,
            ],
            [
                'id' => '36',
                'nama' => 'SERANG',
                'provinsi_id' => 3,
            ],
            [
                'id' => '37',
                'nama' => 'TANGERANG',
                'provinsi_id' => 3,
            ],
            [
                'id' => '38',
                'nama' => 'TANGERANG SELATAN',
                'provinsi_id' => 3,
            ],
        ];

        foreach ($dataKabupaten as $data) {
            Kabupaten::create($data);
        }
    }
}

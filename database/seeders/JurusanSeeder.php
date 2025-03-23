<?php

namespace Database\Seeders;

use App\Models\Jurusan;
use Illuminate\Database\Seeder;

class JurusanSeeder extends Seeder
{
    public function run(): void
    {
        $dataJurusan = [
            [
                'id' => '1',
                'nama' => 'Unggulan',
            ],
            [
                'id' => '2',
                'nama' => 'Reguler',
            ],
        ];

        foreach ($dataJurusan as $data) {
            Jurusan::create($data);
        }
    }
}

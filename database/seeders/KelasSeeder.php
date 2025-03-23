<?php

namespace Database\Seeders;

use App\Models\Kelas;
use Illuminate\Database\Seeder;

class KelasSeeder extends Seeder
{
    public function run(): void
    {
        $dataKelas = [
            [
                'nama' => '7A',
                'jurusan_id' => '1',
            ],
            [
                'nama' => '7B',
                'jurusan_id' => '1',
            ],
            [
                'nama' => '7C',
                'jurusan_id' => '1',
            ],
            [
                'nama' => '7D',
                'jurusan_id' => '1',
            ],
            [
                'nama' => '7E',
                'jurusan_id' => '1',
            ],
            [
                'nama' => '7F',
                'jurusan_id' => '2',
            ],
            [
                'nama' => '7G',
                'jurusan_id' => '2',
            ],
            [
                'nama' => '7H',
                'jurusan_id' => '2',
            ],
            [
                'nama' => '7I',
                'jurusan_id' => '2',
            ],
            [
                'nama' => '7J',
                'jurusan_id' => '2',
            ],
            [
                'nama' => '7K',
                'jurusan_id' => '2',
            ],
        ];

        foreach ($dataKelas as $data) {
            Kelas::create($data);
        }
    }
}

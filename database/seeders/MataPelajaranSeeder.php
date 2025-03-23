<?php

namespace Database\Seeders;

use App\Models\MataPelajaran;
use Illuminate\Database\Seeder;

class MataPelajaranSeeder extends Seeder
{
    public function run(): void
    {
        $dataMataPelajaran = [
            [
                'nama' => 'Bahasa Indonesia',
            ],
            [
                'nama' => 'Bahasa Inggris',
            ],
            [
                'nama' => 'Bahasa Bahasa Arab',
            ],
            [
                'nama' => 'Matematika',
            ],
            [
                'nama' => 'IPA',
            ],
            [
                'nama' => 'IPS',
            ],
            [
                'nama' => 'PPKn',
            ],
            [
                'nama' => 'PJOK',
            ],
            [
                'nama' => 'Seni Budaya',
            ],
            [
                'nama' => 'Prakarya',
            ],
        ];

        foreach ($dataMataPelajaran as $data) {
            MataPelajaran::create($data);
        }
    }
}

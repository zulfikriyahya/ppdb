<?php

namespace Database\Seeders;

use App\Models\Ekstrakurikuler;
use Illuminate\Database\Seeder;

class EkstrakurikulerSeeder extends Seeder
{
    public function run(): void
    {
        $dataEkstrakurikuler = [
            [
                'nama' => 'Pramuka',
            ],
            [
                'nama' => 'Paskibra',
            ],
            [
                'nama' => 'Olahraga',
            ],
            [
                'nama' => 'Kesenian',
            ],
            [
                'nama' => 'Kesehatan',
            ],
            [
                'nama' => 'Kerohanian',
            ],
        ];

        foreach ($dataEkstrakurikuler as $data) {
            Ekstrakurikuler::create($data);
        }
    }
}

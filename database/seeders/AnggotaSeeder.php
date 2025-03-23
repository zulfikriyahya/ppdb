<?php

namespace Database\Seeders;

use App\Models\Anggota;
use Illuminate\Database\Seeder;

class AnggotaSeeder extends Seeder
{
    public function run(): void
    {
        $dataAnggota = [
            //
        ];

        foreach ($dataAnggota as $data) {
            Anggota::create($data);
        }
    }
}

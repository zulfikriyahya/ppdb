<?php

namespace Database\Seeders;

use App\Models\Sekolah;
use Illuminate\Database\Seeder;

class SekolahSeeder extends Seeder
{
    public function run(): void
    {
        $dataSekolah = [
            //
        ];

        foreach ($dataSekolah as $data) {
            Sekolah::create($data);
        }
    }
}

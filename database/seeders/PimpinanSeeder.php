<?php

namespace Database\Seeders;

use App\Models\Pimpinan;
use Illuminate\Database\Seeder;

class PimpinanSeeder extends Seeder
{
    public function run(): void
    {
        $dataPimpinan = [
            //
        ];

        foreach ($dataPimpinan as $data) {
            Pimpinan::create($data);
        }
    }
}

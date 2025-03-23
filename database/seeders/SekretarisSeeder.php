<?php

namespace Database\Seeders;

use App\Models\Sekretaris;
use Illuminate\Database\Seeder;

class SekretarisSeeder extends Seeder
{
    public function run(): void
    {
        $dataSekretaris = [
            //
        ];

        foreach ($dataSekretaris as $data) {
            Sekretaris::create($data);
        }
    }
}

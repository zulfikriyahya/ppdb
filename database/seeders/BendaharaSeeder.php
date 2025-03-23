<?php

namespace Database\Seeders;

use App\Models\Bendahara;
use Illuminate\Database\Seeder;

class BendaharaSeeder extends Seeder
{
    public function run(): void
    {
        $dataBendahara = [
            //
        ];

        foreach ($dataBendahara as $data) {
            Bendahara::create($data);
        }
    }
}

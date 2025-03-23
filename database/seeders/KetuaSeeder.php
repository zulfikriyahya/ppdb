<?php

namespace Database\Seeders;

use App\Models\Ketua;
use Illuminate\Database\Seeder;

class KetuaSeeder extends Seeder
{
    public function run(): void
    {
        $dataKetua = [
            //
        ];

        foreach ($dataKetua as $data) {
            Ketua::create($data);
        }
    }
}

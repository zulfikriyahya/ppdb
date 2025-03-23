<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class NegaraSeeder extends Seeder
{
    public function run(): void
    {
        Negara::create([
            'nama' => 'INDONESIA',
            'bendera' => null,
        ]);
    }
}

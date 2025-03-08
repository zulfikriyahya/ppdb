<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Administrator MTs Negeri 1 Pandeglang',
            'email' => 'adm@mtsn1pandeglang.sch.id',
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        Role::create(
            ['name' => 'calon-siswa', 'guard_name' => 'web'],
            ['name' => 'panitia', 'guard_name' => 'web'],
        );
    }
}

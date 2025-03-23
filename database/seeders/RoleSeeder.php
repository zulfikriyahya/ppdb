<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        Role::create(
            [
                'name' => 'panitia',
                'guard_name' => 'web',
            ],
            [
                'name' => 'calon-siswa',
                'guard_name' => 'web',
            ],
        );
    }
}

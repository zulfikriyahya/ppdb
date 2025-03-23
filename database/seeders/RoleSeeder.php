<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    public function run(): void
    {

        $dataRole = [
            [
                'name' => 'panitia',
                'guard_name' => 'web',
            ],
            [
                'name' => 'peserta',
                'guard_name' => 'web',
            ],
        ];

        foreach ($dataRole as $data) {
            Role::create($data);
        }
    }
}

<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $dataUser = [
            [
                'name' => 'Administrator',
                'username' => 'administrator',
                'status' => 'Aktif',
                'email' => 'adm@mtsn1pandeglang.sch.id',
                'email_verified_at' => now(),
                'password' => Hash::make('password'),
                'remember_token' => Str::random(10),
            ],
            [
                'name' => 'Pupung Purnamasari, S.Pd.I.',
                'username' => 'panitia',
                'status' => 'Aktif',
                'email' => 'ppupung@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('password'),
                'remember_token' => Str::random(10),
            ],
            [
                'name' => 'Aris Nurdiansyah, S.Pd.',
                'username' => 'nurdiansyah',
                'status' => 'Aktif',
                'email' => 'diansyah@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('password'),
                'remember_token' => Str::random(10),
            ],
        ];

        foreach ($dataUser as $data) {
            User::create($data);
        }
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Administrator',
            'username' => 'administrator',
            'status' => 'Aktif',
            'email' => 'adm@mtsn1pandeglang.sch.id',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10),
        ]);
        User::create([
            'name' => 'Pupung Purnamasari, S.Pd.I.',
            'username' => 'panitia',
            'status' => 'Aktif',
            'email' => 'ppupung@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10),
        ]);
        User::create([
            'name' => 'Aris Nurdiansyah, S.Pd.',
            'username' => 'nurdiansyah',
            'status' => 'Aktif',
            'email' => 'diansyah@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10),
        ]);
    }
}

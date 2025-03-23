<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

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
                'username' => 'pupung',
                'status' => 'Aktif',
                'email' => 'ppupung179@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('P@ssw0rd_pupung'),
                'remember_token' => Str::random(10),
            ],
            [
                'name' => 'Aris Nurdiansyah, S.Pd.',
                'username' => 'diansyah',
                'status' => 'Aktif',
                'email' => 'diansyahofficial@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('P@ssw0rd_diansyah'),
                'remember_token' => Str::random(10),
            ],
        ];

        foreach ($dataUser as $data) {
            User::create($data);
        }
    }
}

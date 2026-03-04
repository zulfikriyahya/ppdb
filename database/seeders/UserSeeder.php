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
                'role' => 'super_admin',
            ],
        ];

        foreach ($dataUser as $data) {
            $role = $data['role'];

            $user = User::withoutEvents(function () use ($data) {
                return User::create([
                    'name' => $data['name'],
                    'username' => $data['username'],
                    'status' => $data['status'],
                    'email' => $data['email'],
                    'email_verified_at' => $data['email_verified_at'],
                    'password' => $data['password'],
                    'remember_token' => $data['remember_token'],
                ]);
            });

            $user->assignRole($role);
        }
    }
}

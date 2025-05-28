<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Role;

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
                'role' => 'administrator',
            ]
        ];

        foreach ($dataUser as $data) {
            // Buat pengguna
            $user = User::create([
                'name' => $data['name'],
                'username' => $data['username'],
                'status' => $data['status'],
                'email' => $data['email'],
                'email_verified_at' => $data['email_verified_at'],
                'password' => $data['password'],
                'remember_token' => $data['remember_token'],
            ]);

            // Assign role ke pengguna
            if (isset($data['role'])) {
                $role = Role::where('name', $data['role'])->first();
                if ($role) {
                    $user->assignRole($role);
                }
            }
        }
    }
}

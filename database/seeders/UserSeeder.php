<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;

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
                'password' => Hash::make('P@ndegl@ng_14012000*'),
                'remember_token' => Str::random(10),
                'role' => 'administrator', // Peran yang akan diassign
            ],
            [
                'name' => 'Pupung Purnamasari, S.Pd.I.',
                'username' => 'pupung',
                'status' => 'Aktif',
                'email' => 'ppupung179@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('P@ssw0rd_pupung'),
                'remember_token' => Str::random(10),
                'role' => 'panitia', // Peran yang akan diassign
            ],
            [
                'name' => 'Aris Nurdiansyah, S.Pd.',
                'username' => 'diansyah',
                'status' => 'Aktif',
                'email' => 'diansyahofficial@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('P@ssw0rd_diansyah'),
                'remember_token' => Str::random(10),
                'role' => 'panitia', // Peran yang akan diassign
            ],
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

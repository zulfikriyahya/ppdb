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
                'password' => Hash::make('P@ndegl@ng_14012000*'),
                'remember_token' => Str::random(10),
                'role' => 'administrator',
            ],
            [
                'name' => 'Pupung Purnamasari, S.Pd.I.',
                'username' => 'pupung',
                'status' => 'Aktif',
                'email' => 'pupung@mtsn1pandeglang.sch.id',
                'email_verified_at' => now(),
                'password' => Hash::make('P@ssw0rd_pupung'),
                'remember_token' => Str::random(10),
                'role' => 'panitia',
            ],
            [
                'name' => 'Aris Nurdiansyah, S.Pd.',
                'username' => 'aris',
                'status' => 'Aktif',
                'email' => 'aris@mtsn1pandeglang.sch.id',
                'email_verified_at' => now(),
                'password' => Hash::make('P@ssw0rd_aris'),
                'remember_token' => Str::random(10),
                'role' => 'panitia',
            ],
            [
                'name' => 'Widi Nurhanah, S.Pd.',
                'username' => 'widi',
                'status' => 'Aktif',
                'email' => 'widi@mtsn1pandeglang.sch.id',
                'email_verified_at' => now(),
                'password' => Hash::make('P@ssw0rd_widi'),
                'remember_token' => Str::random(10),
                'role' => 'panitia',
            ],
            [
                'name' => 'Yeyen Nurazizah, S.Pd.',
                'username' => 'yeyen',
                'status' => 'Aktif',
                'email' => 'yeyen@mtsn1pandeglang.sch.id',
                'email_verified_at' => now(),
                'password' => Hash::make('P@ssw0rd_yeyen'),
                'remember_token' => Str::random(10),
                'role' => 'panitia',
            ],
            [
                'name' => 'Ati Suryati, S.Pd.',
                'username' => 'ati',
                'status' => 'Aktif',
                'email' => 'ati@mtsn1pandeglang.sch.id',
                'email_verified_at' => now(),
                'password' => Hash::make('P@ssw0rd_ati'),
                'remember_token' => Str::random(10),
                'role' => 'panitia',
            ],
            [
                'name' => 'Wulan Novita, S.Si.',
                'username' => 'wulan',
                'status' => 'Aktif',
                'email' => 'wulan@mtsn1pandeglang.sch.id',
                'email_verified_at' => now(),
                'password' => Hash::make('P@ssw0rd_wulan'),
                'remember_token' => Str::random(10),
                'role' => 'panitia',
            ],
            [
                'name' => 'Hartono, S.Pd.',
                'username' => 'hartono',
                'status' => 'Aktif',
                'email' => 'hartono@mtsn1pandeglang.sch.id',
                'email_verified_at' => now(),
                'password' => Hash::make('P@ssw0rd_hartono'),
                'remember_token' => Str::random(10),
                'role' => 'panitia',
            ],
            [
                'name' => 'Agus Maksum, S.Pd.I.',
                'username' => 'agus',
                'status' => 'Aktif',
                'email' => 'agus@mtsn1pandeglang.sch.id',
                'email_verified_at' => now(),
                'password' => Hash::make('P@ssw0rd_agus'),
                'remember_token' => Str::random(10),
                'role' => 'panitia',
            ],
            [
                'name' => 'Mahbudin, S.Pd.I., M.Pd.',
                'username' => 'mahbudin',
                'status' => 'Aktif',
                'email' => 'mahbudin@mtsn1pandeglang.sch.id',
                'email_verified_at' => now(),
                'password' => Hash::make('P@ssw0rd_mahbudin'),
                'remember_token' => Str::random(10),
                'role' => 'panitia',
            ],
            [
                'name' => 'H. Eman Sulaiman, S.Ag., M.Pd.',
                'username' => 'eman',
                'status' => 'Aktif',
                'email' => 'eman@mtsn1pandeglang.sch.id',
                'email_verified_at' => now(),
                'password' => Hash::make('P@ssw0rd_eman'),
                'remember_token' => Str::random(10),
                'role' => 'panitia',
            ],
            [
                'name' => 'Umar Mu\'tamar, S.Ag.',
                'username' => 'umar',
                'status' => 'Aktif',
                'email' => 'umar@mtsn1pandeglang.sch.id',
                'email_verified_at' => now(),
                'password' => Hash::make('P@ssw0rd_umar'),
                'remember_token' => Str::random(10),
                'role' => 'panitia',
            ],
            [
                'name' => 'Hj. Oom Sunarsih, S.Pd.I., M.Pd.I.',
                'username' => 'oom',
                'status' => 'Aktif',
                'email' => 'oom@mtsn1pandeglang.sch.id',
                'email_verified_at' => now(),
                'password' => Hash::make('P@ssw0rd_oom'),
                'remember_token' => Str::random(10),
                'role' => 'panitia',
            ],
            [
                'name' => 'Didin Rosyidin, S.E., M.A.P.',
                'username' => 'didin',
                'status' => 'Aktif',
                'email' => 'didin@mtsn1pandeglang.sch.id',
                'email_verified_at' => now(),
                'password' => Hash::make('P@ssw0rd_didin'),
                'remember_token' => Str::random(10),
                'role' => 'panitia',
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

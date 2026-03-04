<?php

namespace Database\Seeders;

use BezhanSalleh\FilamentShield\Support\Utils;
use Illuminate\Database\Seeder;
use Spatie\Permission\PermissionRegistrar;

class ShieldSeeder extends Seeder
{
    public function run(): void
    {
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        $rolesWithPermissions = json_encode([

            // ---------------------------------------------------------------
            // SUPER ADMIN — bypass via gate, permissions array kosong
            // ---------------------------------------------------------------
            [
                'name' => 'super_admin',
                'guard_name' => 'web',
                'permissions' => [],
            ],

            // ---------------------------------------------------------------
            // ADMIN — manajemen data master & pengguna
            // ---------------------------------------------------------------
            [
                'name' => 'admin',
                'guard_name' => 'web',
                'permissions' => [
                    // User
                    'view_any_user',
                    'view_user',
                    'create_user',
                    'update_user',
                    'delete_user',
                    'delete_any_user',
                    'restore_user',
                    'restore_any_user',
                    'force_delete_user',
                    'force_delete_any_user',

                    // Role
                    'view_any_role',
                    'view_role',
                    'create_role',
                    'update_role',
                    'delete_role',
                    'delete_any_role',

                    // TahunPendaftaran
                    'view_any_tahun::pendaftaran',
                    'view_tahun::pendaftaran',
                    'create_tahun::pendaftaran',
                    'update_tahun::pendaftaran',
                    'delete_tahun::pendaftaran',
                    'delete_any_tahun::pendaftaran',
                    'restore_tahun::pendaftaran',
                    'restore_any_tahun::pendaftaran',
                    'force_delete_tahun::pendaftaran',
                    'force_delete_any_tahun::pendaftaran',

                    // JalurPendaftaran
                    'view_any_jalur::pendaftaran',
                    'view_jalur::pendaftaran',
                    'create_jalur::pendaftaran',
                    'update_jalur::pendaftaran',
                    'delete_jalur::pendaftaran',
                    'delete_any_jalur::pendaftaran',
                    'restore_jalur::pendaftaran',
                    'restore_any_jalur::pendaftaran',
                    'force_delete_jalur::pendaftaran',
                    'force_delete_any_jalur::pendaftaran',

                    // Sekolah
                    'view_any_sekolah',
                    'view_sekolah',
                    'create_sekolah',
                    'update_sekolah',
                    'delete_sekolah',
                    'delete_any_sekolah',
                    'restore_sekolah',
                    'restore_any_sekolah',
                    'force_delete_sekolah',
                    'force_delete_any_sekolah',

                    // SekolahAsal
                    'view_any_sekolah::asal',
                    'view_sekolah::asal',
                    'create_sekolah::asal',
                    'update_sekolah::asal',
                    'delete_sekolah::asal',
                    'delete_any_sekolah::asal',
                    'restore_sekolah::asal',
                    'restore_any_sekolah::asal',
                    'force_delete_sekolah::asal',
                    'force_delete_any_sekolah::asal',

                    // Wilayah
                    'view_any_negara',
                    'view_negara',
                    'create_negara',
                    'update_negara',
                    'delete_negara',
                    'delete_any_negara',
                    'view_any_provinsi',
                    'view_provinsi',
                    'create_provinsi',
                    'update_provinsi',
                    'delete_provinsi',
                    'delete_any_provinsi',
                    'view_any_kabupaten',
                    'view_kabupaten',
                    'create_kabupaten',
                    'update_kabupaten',
                    'delete_kabupaten',
                    'delete_any_kabupaten',
                    'view_any_kecamatan',
                    'view_kecamatan',
                    'create_kecamatan',
                    'update_kecamatan',
                    'delete_kecamatan',
                    'delete_any_kecamatan',
                    'view_any_kelurahan',
                    'view_kelurahan',
                    'create_kelurahan',
                    'update_kelurahan',
                    'delete_kelurahan',
                    'delete_any_kelurahan',

                    // Prestasi
                    'view_any_prestasi',
                    'view_prestasi',
                    'create_prestasi',
                    'update_prestasi',
                    'delete_prestasi',
                    'delete_any_prestasi',
                    'restore_prestasi',
                    'restore_any_prestasi',
                    'force_delete_prestasi',
                    'force_delete_any_prestasi',

                    // Ekstrakurikuler
                    'view_any_ekstrakurikuler',
                    'view_ekstrakurikuler',
                    'create_ekstrakurikuler',
                    'update_ekstrakurikuler',
                    'delete_ekstrakurikuler',
                    'delete_any_ekstrakurikuler',

                    // MataPelajaran
                    'view_any_mata::pelajaran',
                    'view_mata::pelajaran',
                    'create_mata::pelajaran',
                    'update_mata::pelajaran',
                    'delete_mata::pelajaran',
                    'delete_any_mata::pelajaran',

                    // Jurusan
                    'view_any_jurusan',
                    'view_jurusan',
                    'create_jurusan',
                    'update_jurusan',
                    'delete_jurusan',
                    'delete_any_jurusan',

                    // Kelas
                    'view_any_kelas',
                    'view_kelas',
                    'create_kelas',
                    'update_kelas',
                    'delete_kelas',
                    'delete_any_kelas',
                ],
            ],

            // ---------------------------------------------------------------
            // VERIFIKATOR — review & validasi formulir + berkas
            // ---------------------------------------------------------------
            [
                'name' => 'verifikator',
                'guard_name' => 'web',
                'permissions' => [
                    // CalonSiswa — view + update status (no create/delete)
                    'view_any_calon::siswa',
                    'view_calon::siswa',
                    'update_calon::siswa',

                    // Informasi — view only
                    'view_any_informasi',
                    'view_informasi',
                ],
            ],

            // ---------------------------------------------------------------
            // PANITIA — input nilai, assign jadwal, cetak kartu
            // ---------------------------------------------------------------
            [
                'name' => 'panitia',
                'guard_name' => 'web',
                'permissions' => [
                    // CalonSiswa — view + update (nilai, jadwal, status)
                    'view_any_calon::siswa',
                    'view_calon::siswa',
                    'update_calon::siswa',

                    // Informasi — full CRUD
                    'view_any_informasi',
                    'view_informasi',
                    'create_informasi',
                    'update_informasi',
                    'delete_informasi',
                    'delete_any_informasi',

                    // Pimpinan
                    'view_any_pimpinan',
                    'view_pimpinan',
                    'create_pimpinan',
                    'update_pimpinan',
                    'delete_pimpinan',
                    'delete_any_pimpinan',

                    // Ketua
                    'view_any_ketua',
                    'view_ketua',
                    'create_ketua',
                    'update_ketua',
                    'delete_ketua',
                    'delete_any_ketua',

                    // Sekretaris
                    'view_any_sekretaris',
                    'view_sekretaris',
                    'create_sekretaris',
                    'update_sekretaris',
                    'delete_sekretaris',
                    'delete_any_sekretaris',

                    // Bendahara
                    'view_any_bendahara',
                    'view_bendahara',
                    'create_bendahara',
                    'update_bendahara',
                    'delete_bendahara',
                    'delete_any_bendahara',

                    // Anggota
                    'view_any_anggota',
                    'view_anggota',
                    'create_anggota',
                    'update_anggota',
                    'delete_anggota',
                    'delete_any_anggota',

                    // Kelas — untuk assign siswa ke kelas
                    'view_any_kelas',
                    'view_kelas',
                    'update_kelas',
                ],
            ],

            // ---------------------------------------------------------------
            // CALON SISWA — registrasi, isi formulir, upload berkas, cetak
            // ---------------------------------------------------------------
            [
                'name' => 'calon_siswa',
                'guard_name' => 'web',
                'permissions' => [
                    // CalonSiswa — hanya milik sendiri, dikontrol di Resource
                    'view_any_calon::siswa',
                    'view_calon::siswa',
                    'create_calon::siswa',
                    'update_calon::siswa',

                    // Informasi — view only
                    'view_any_informasi',
                    'view_informasi',
                ],
            ],
        ]);

        $directPermissions = '[]';

        static::makeRolesWithPermissions($rolesWithPermissions);
        static::makeDirectPermissions($directPermissions);
    }

    protected static function makeRolesWithPermissions(string $rolesWithPermissions): void
    {
        if (! blank($rolePlusPermissions = json_decode($rolesWithPermissions, true))) {
            $roleModel = Utils::getRoleModel();
            $permissionModel = Utils::getPermissionModel();

            foreach ($rolePlusPermissions as $rolePlusPermission) {
                $role = $roleModel::firstOrCreate([
                    'name' => $rolePlusPermission['name'],
                    'guard_name' => $rolePlusPermission['guard_name'],
                ]);

                if (! blank($rolePlusPermission['permissions'])) {
                    $permissionModels = collect($rolePlusPermission['permissions'])
                        ->map(fn ($permission) => $permissionModel::firstOrCreate([
                            'name' => $permission,
                            'guard_name' => $rolePlusPermission['guard_name'],
                        ]))
                        ->all();

                    $role->syncPermissions($permissionModels);
                }
            }
        }
    }

    public static function makeDirectPermissions(string $directPermissions): void
    {
        if (! blank($permissions = json_decode($directPermissions, true))) {
            $permissionModel = Utils::getPermissionModel();

            foreach ($permissions as $permission) {
                if ($permissionModel::whereName($permission)->doesntExist()) {
                    $permissionModel::create([
                        'name' => $permission['name'],
                        'guard_name' => $permission['guard_name'],
                    ]);
                }
            }
        }
    }
}

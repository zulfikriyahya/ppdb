<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
            TahunPendaftaranSeeder::class,
            JalurPendaftaranSeeder::class,
            PrestasiSeeder::class,
            NegaraSeeder::class,
            ProvinsiSeeder::class,
            KabupatenSeeder::class,
            KecamatanSeeder::class,
            KelurahanSeeder::class,
            SekolahAsalSeeder::class,
            MataPelajaranSeeder::class,
            EkstrakurikulerSeeder::class,
            JurusanSeeder::class,
            KelasSeeder::class,
            // PimpianSeeder::class,
            // KetuaSeeder::class,
            // SekretarisSeeder::class,
            // BendaharaSeeder::class,
            // AnggotaSeeder::class,
            // SekolahSeeder::class,
        ]);
    }
}

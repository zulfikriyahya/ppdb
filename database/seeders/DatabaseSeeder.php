<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\RoleSeeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\KelasSeeder;
use Database\Seeders\KetuaSeeder;
use Database\Seeders\NegaraSeeder;
use Database\Seeders\AnggotaSeeder;
use Database\Seeders\JurusanSeeder;
use Database\Seeders\SekolahSeeder;
use Database\Seeders\PimpinanSeeder;
use Database\Seeders\PrestasiSeeder;
use Database\Seeders\ProvinsiSeeder;
use Database\Seeders\BendaharaSeeder;
use Database\Seeders\KabupatenSeeder;
use Database\Seeders\KecamatanSeeder;
use Database\Seeders\KelurahanSeeder;
use Database\Seeders\SekretarisSeeder;
use Database\Seeders\SekolahAsalSeeder;
use Database\Seeders\MataPelajaranSeeder;
use Database\Seeders\EkstrakurikulerSeeder;
use Database\Seeders\JalurPendaftaranSeeder;
use Database\Seeders\TahunPendaftaranSeeder;

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
            PimpinanSeeder::class,
            KetuaSeeder::class,
            SekretarisSeeder::class,
            BendaharaSeeder::class,
            AnggotaSeeder::class,
            SekolahSeeder::class,
        ]);
    }
}

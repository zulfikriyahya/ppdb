<?php

namespace Database\Seeders;

use App\Models\Ekstrakurikuler;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\JalurPendaftaran;
use App\Models\Jurusan;
use App\Models\Kabupaten;
use App\Models\Kecamatan;
use App\Models\Kelas;
use App\Models\Kelurahan;
use App\Models\MataPelajaran;
use App\Models\Negara;
use App\Models\Prestasi;
use App\Models\Provinsi;
use App\Models\TahunPendaftaran;
use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {

        // Role
        // User Seeder
        // TahunPendaftaran Seeder
        // JalurPendaftaran Seeder
        // Prestasi Seeder
        // Negara Seeder
        // Provinsi Seeder
        // Kabupaten Seeder
        // Kecamatan Seeder
        // Kelurahan Seeder
        // Sekolah Asal Seeder

        // Mata Pelajaran Seeder
        $dataMataPelajaran = [
            ['nama' => 'Bahasa Indonesia'],
            ['nama' => 'Bahasa Inggris'],
            ['nama' => 'Bahasa Bahasa Arab'],
            ['nama' => 'Matematika'],
            ['nama' => 'IPA'],
            ['nama' => 'IPS'],
            ['nama' => 'PPKn'],
            ['nama' => 'PJOK'],
            ['nama' => 'Seni Budaya'],
            ['nama' => 'Prakarya'],
        ];

        foreach ($dataMataPelajaran as $data) {
            MataPelajaran::create($data);
        }

        // Ekstrakurikuler Seeder
        $dataEkstrakurikuler = [
            ['nama' => 'Pramuka'],
            ['nama' => 'Paskibra'],
            ['nama' => 'Olahraga'],
            ['nama' => 'Kesenian'],
            ['nama' => 'Kesehatan'],
            ['nama' => 'Kerohanian'],
        ];

        foreach ($dataEkstrakurikuler as $data) {
            Ekstrakurikuler::create($data);
        }

        // Jurusan Seeder
        $dataJurusan = [
            ['id' => '1', 'nama' => 'Unggulan'],
            ['id' => '2', 'nama' => 'Reguler'],
        ];

        foreach ($dataJurusan as $data) {
            Jurusan::create($data);
        }

        // Kelas Seeder
        $dataKelas = [
            ['nama' => '7A', 'jurusan_id' => '1'],
            ['nama' => '7B', 'jurusan_id' => '1'],
            ['nama' => '7C', 'jurusan_id' => '1'],
            ['nama' => '7D', 'jurusan_id' => '1'],
            ['nama' => '7E', 'jurusan_id' => '1'],
            ['nama' => '7F', 'jurusan_id' => '2'],
            ['nama' => '7G', 'jurusan_id' => '2'],
            ['nama' => '7H', 'jurusan_id' => '2'],
            ['nama' => '7I', 'jurusan_id' => '2'],
            ['nama' => '7J', 'jurusan_id' => '2'],
            ['nama' => '7K', 'jurusan_id' => '2'],
        ];

        foreach ($dataKelas as $data) {
            Kelas::create($data);
        }
    }
}

<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Negara;
use App\Models\Provinsi;
use App\Models\Kabupaten;
use App\Models\Kecamatan;
use App\Models\Kelurahan;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // User Seeder
        User::factory()->create([
            'name' => 'Admin ADMISI',
            'email' => 'adm@mtsn1pandeglang.sch.id',
        ]);

        // Negara Seeder
        Negara::create([
            'nama' => 'INDONESIA',
            'bendera' => null,
        ]);

        // Provinsi Seeder
        Provinsi::create([
            'nama' => 'BANTEN',
            'negara_id' => 1,
        ]);

        // Kabupaten Seeder
        $dataKabupaten = [
            // Provinsi Banten ID == 1
            ['nama' => 'CILEGON', 'provinsi_id' => 1],
            ['nama' => 'LEBAK', 'provinsi_id' => 1],
            ['nama' => 'PANDEGLANG', 'provinsi_id' => 1],
            ['nama' => 'SERANG', 'provinsi_id' => 1],
            ['nama' => 'TANGERANG', 'provinsi_id' => 1],
            ['nama' => 'TANGERANG SELATAN', 'provinsi_id' => 1],
        ];

        foreach ($dataKabupaten as $data) {
            Kabupaten::create($data);
        }

        // Kecamatan Seeder
        $dataKecamatan = [
            // Kabupaten Cilegon ID == 1
            ['nama' => 'CIBEBER', 'kabupaten_id' => 1],
            ['nama' => 'CILEGON', 'kabupaten_id' => 1],
            ['nama' => 'CITANGKIL', 'kabupaten_id' => 1],
            ['nama' => 'CIWANDAN', 'kabupaten_id' => 1],
            ['nama' => 'GEROGOL', 'kabupaten_id' => 1],
            ['nama' => 'JOMBANG', 'kabupaten_id' => 1],
            ['nama' => 'PULOMERAK', 'kabupaten_id' => 1],
            ['nama' => 'PURWAKARTA', 'kabupaten_id' => 1],

            // Kabupaten Lebak ID == 2
            ['nama' => 'BANJARSARI', 'kabupaten_id' => 2],
            ['nama' => 'BAYAH', 'kabupaten_id' => 2],
            ['nama' => 'BOJONGMANIK', 'kabupaten_id' => 2],
            ['nama' => 'CIBADAK', 'kabupaten_id' => 2],
            ['nama' => 'CIBEBER', 'kabupaten_id' => 2],
            ['nama' => 'CIGEMBLONG', 'kabupaten_id' => 2],
            ['nama' => 'CIHARA', 'kabupaten_id' => 2],
            ['nama' => 'CIJAKU', 'kabupaten_id' => 2],
            ['nama' => 'CIKULUR', 'kabupaten_id' => 2],
            ['nama' => 'CILELES', 'kabupaten_id' => 2],
            ['nama' => 'CILOGRANG', 'kabupaten_id' => 2],
            ['nama' => 'CIMARGA', 'kabupaten_id' => 2],
            ['nama' => 'CIPANAS', 'kabupaten_id' => 2],
            ['nama' => 'CIRINTEN', 'kabupaten_id' => 2],
            ['nama' => 'CURUGBITUNG', 'kabupaten_id' => 2],
            ['nama' => 'GUNUNG KENCANA', 'kabupaten_id' => 2],
            ['nama' => 'KALANGANYAR', 'kabupaten_id' => 2],
            ['nama' => 'LEBAKGEDONG', 'kabupaten_id' => 2],
            ['nama' => 'LEUWIDAMAR', 'kabupaten_id' => 2],
            ['nama' => 'MAJA', 'kabupaten_id' => 2],
            ['nama' => 'MALINGPING', 'kabupaten_id' => 2],
            ['nama' => 'MUNCANG', 'kabupaten_id' => 2],
            ['nama' => 'PANGGARANGAN', 'kabupaten_id' => 2],
            ['nama' => 'RANGKASBITUNG', 'kabupaten_id' => 2],
            ['nama' => 'SAJIRA', 'kabupaten_id' => 2],
            ['nama' => 'SOBANG', 'kabupaten_id' => 2],
            ['nama' => 'WANASALAM', 'kabupaten_id' => 2],
            ['nama' => 'WARUNGGUNUNG', 'kabupaten_id' => 2],

            // Kabupaten Pandeglang ID == 3
            ['nama' => 'ANGSANA', 'kabupaten_id' => 3],
            ['nama' => 'BANJAR', 'kabupaten_id' => 3],
            ['nama' => 'BOJONG', 'kabupaten_id' => 3],
            ['nama' => 'CADASARI', 'kabupaten_id' => 3],
            ['nama' => 'CARITA', 'kabupaten_id' => 3],
            ['nama' => 'CIBALIUNG', 'kabupaten_id' => 3],
            ['nama' => 'CIBITUNG', 'kabupaten_id' => 3],
            ['nama' => 'CIGEULIS', 'kabupaten_id' => 3],
            ['nama' => 'CIKEUDAL', 'kabupaten_id' => 3],
            ['nama' => 'CIKEUSIK', 'kabupaten_id' => 3],
            ['nama' => 'CIMANGGU', 'kabupaten_id' => 3],
            ['nama' => 'CIMANUK', 'kabupaten_id' => 3],
            ['nama' => 'CIPEUCANG', 'kabupaten_id' => 3],
            ['nama' => 'CISATA', 'kabupaten_id' => 3],
            ['nama' => 'JIPUT', 'kabupaten_id' => 3],
            ['nama' => 'KADUHEJO', 'kabupaten_id' => 3],
            ['nama' => 'KARANG TANJUNG', 'kabupaten_id' => 3],
            ['nama' => 'KORONCONG', 'kabupaten_id' => 3],
            ['nama' => 'LABUAN', 'kabupaten_id' => 3],
            ['nama' => 'MAJASARI', 'kabupaten_id' => 3],
            ['nama' => 'MANDALAWANGI', 'kabupaten_id' => 3],
            ['nama' => 'MEKARJAYA', 'kabupaten_id' => 3],
            ['nama' => 'MENES', 'kabupaten_id' => 3],
            ['nama' => 'MUNJUL', 'kabupaten_id' => 3],
            ['nama' => 'PAGELARAN', 'kabupaten_id' => 3],
            ['nama' => 'PANDEGLANG', 'kabupaten_id' => 3],
            ['nama' => 'PANIMBANG', 'kabupaten_id' => 3],
            ['nama' => 'PATIA', 'kabupaten_id' => 3],
            ['nama' => 'PICUNG', 'kabupaten_id' => 3],
            ['nama' => 'PULOSARI', 'kabupaten_id' => 3],
            ['nama' => 'SAKETI', 'kabupaten_id' => 3],
            ['nama' => 'SINDANGRESMI', 'kabupaten_id' => 3],
            ['nama' => 'SOBANG', 'kabupaten_id' => 3],
            ['nama' => 'SUKARESMI', 'kabupaten_id' => 3],
            ['nama' => 'SUMUR', 'kabupaten_id' => 3],

            // Kabupaten Serang ID == 4
            ['nama' => 'ANYAR', 'kabupaten_id' => 4],
            ['nama' => 'BANDUNG', 'kabupaten_id' => 4],
            ['nama' => 'BAROS', 'kabupaten_id' => 4],
            ['nama' => 'BINUANG', 'kabupaten_id' => 4],
            ['nama' => 'BOJONEGARA', 'kabupaten_id' => 4],
            ['nama' => 'CARENANG (CERENANG)', 'kabupaten_id' => 4],
            ['nama' => 'CIKANDE', 'kabupaten_id' => 4],
            ['nama' => 'CIKEUSAL', 'kabupaten_id' => 4],
            ['nama' => 'CINANGKA', 'kabupaten_id' => 4],
            ['nama' => 'CIOMAS', 'kabupaten_id' => 4],
            ['nama' => 'CIPOCOK JAYA', 'kabupaten_id' => 4],
            ['nama' => 'CIRUAS', 'kabupaten_id' => 4],
            ['nama' => 'CURUG', 'kabupaten_id' => 4],
            ['nama' => 'GUNUNGSARI', 'kabupaten_id' => 4],
            ['nama' => 'JAWILAN', 'kabupaten_id' => 4],
            ['nama' => 'KASEMEN', 'kabupaten_id' => 4],
            ['nama' => 'KIBIN', 'kabupaten_id' => 4],
            ['nama' => 'KOPO', 'kabupaten_id' => 4],
            ['nama' => 'KRAGILAN', 'kabupaten_id' => 4],
            ['nama' => 'KRAMATWATU', 'kabupaten_id' => 4],
            ['nama' => 'LEBAK WANGI', 'kabupaten_id' => 4],
            ['nama' => 'MANCAK', 'kabupaten_id' => 4],
            ['nama' => 'PABUARAN', 'kabupaten_id' => 4],
            ['nama' => 'PADARINCANG', 'kabupaten_id' => 4],
            ['nama' => 'PAMARAYAN', 'kabupaten_id' => 4],
            ['nama' => 'PETIR', 'kabupaten_id' => 4],
            ['nama' => 'PONTANG', 'kabupaten_id' => 4],
            ['nama' => 'PULO AMPEL', 'kabupaten_id' => 4],
            ['nama' => 'SERANG', 'kabupaten_id' => 4],
            ['nama' => 'TAKTAKAN', 'kabupaten_id' => 4],
            ['nama' => 'TANARA', 'kabupaten_id' => 4],
            ['nama' => 'TIRTAYASA', 'kabupaten_id' => 4],
            ['nama' => 'TUNJUNG TEJA', 'kabupaten_id' => 4],
            ['nama' => 'WALANTAKA', 'kabupaten_id' => 4],
            ['nama' => 'WARINGIN KURUNG', 'kabupaten_id' => 4],

            // Kabupaten Tangerang ID == 5
            ['nama' => 'BALARAJA', 'kabupaten_id' => 5],
            ['nama' => 'BATUCEPER', 'kabupaten_id' => 5],
            ['nama' => 'BENDA', 'kabupaten_id' => 5],
            ['nama' => 'CIBODAS', 'kabupaten_id' => 5],
            ['nama' => 'CIKUPA', 'kabupaten_id' => 5],
            ['nama' => 'CILEDUG', 'kabupaten_id' => 5],
            ['nama' => 'CIPONDOH', 'kabupaten_id' => 5],
            ['nama' => 'CISAUK', 'kabupaten_id' => 5],
            ['nama' => 'CISOKA', 'kabupaten_id' => 5],
            ['nama' => 'CURUG', 'kabupaten_id' => 5],
            ['nama' => 'GUNUNG KALER', 'kabupaten_id' => 5],
            ['nama' => 'JAMBE', 'kabupaten_id' => 5],
            ['nama' => 'JATIUWUNG', 'kabupaten_id' => 5],
            ['nama' => 'JAYANTI', 'kabupaten_id' => 5],
            ['nama' => 'KARANG TENGAH', 'kabupaten_id' => 5],
            ['nama' => 'KARAWACI', 'kabupaten_id' => 5],
            ['nama' => 'KELAPA DUA', 'kabupaten_id' => 5],
            ['nama' => 'KEMIRI', 'kabupaten_id' => 5],
            ['nama' => 'KOSAMBI', 'kabupaten_id' => 5],
            ['nama' => 'KRESEK', 'kabupaten_id' => 5],
            ['nama' => 'KRONJO', 'kabupaten_id' => 5],
            ['nama' => 'LARANGAN', 'kabupaten_id' => 5],
            ['nama' => 'LEGOK', 'kabupaten_id' => 5],
            ['nama' => 'MAUK', 'kabupaten_id' => 5],
            ['nama' => 'MEKAR BARU', 'kabupaten_id' => 5],
            ['nama' => 'NEGLASARI', 'kabupaten_id' => 5],
            ['nama' => 'PAGEDANGAN', 'kabupaten_id' => 5],
            ['nama' => 'PAKUHAJI', 'kabupaten_id' => 5],
            ['nama' => 'PANONGAN', 'kabupaten_id' => 5],
            ['nama' => 'PASAR KEMIS', 'kabupaten_id' => 5],
            ['nama' => 'PERIUK', 'kabupaten_id' => 5],
            ['nama' => 'PINANG', 'kabupaten_id' => 5],
            ['nama' => 'RAJEG', 'kabupaten_id' => 5],
            ['nama' => 'SEPATAN', 'kabupaten_id' => 5],
            ['nama' => 'SEPATAN TIMUR', 'kabupaten_id' => 5],
            ['nama' => 'SINDANG JAYA', 'kabupaten_id' => 5],
            ['nama' => 'SOLEAR', 'kabupaten_id' => 5],
            ['nama' => 'SUKADIRI', 'kabupaten_id' => 5],
            ['nama' => 'SUKAMULYA', 'kabupaten_id' => 5],
            ['nama' => 'TANGERANG', 'kabupaten_id' => 5],
            ['nama' => 'TELUKNAGA', 'kabupaten_id' => 5],
            ['nama' => 'TIGARAKSA', 'kabupaten_id' => 5],

            // Kabupaten Tangerang Selatan ID == 6
            ['nama' => 'CIPUTAT', 'kabupaten_id' => 6],
            ['nama' => 'CIPUTAT TIMUR', 'kabupaten_id' => 6],
            ['nama' => 'PAMULANG', 'kabupaten_id' => 6],
            ['nama' => 'PONDOK AREN', 'kabupaten_id' => 6],
            ['nama' => 'SERPONG', 'kabupaten_id' => 6],
            ['nama' => 'SERPONG UTARA', 'kabupaten_id' => 6],
            ['nama' => 'SETU', 'kabupaten_id' => 6],
        ];

        foreach ($dataKecamatan as $data) {
            Kecamatan::create($data);
        }

        // // Kelurahan Seeder
        // $dataKelurahan = [
        //     //
        // ];

        // foreach ($dataKelurahan as $data) {
        //     Kelurahan::create($data);
        // }
    }
}

<?php

namespace Database\Seeders;

use App\Models\Sekolah;
use Illuminate\Database\Seeder;

class SekolahSeeder extends Seeder
{
    public function run(): void
    {
        $dataSekolah = [
            [
                'nama' => 'MADRASAH TSANAWIYAH NEGERI 1 PANDEGLANG',
                'npsn' => '69788409',
                'nss' => '121136010001',
                'logo' => null,
                'logo_institusi' => null,
                'jenjang' => 'MTS',
                'status' => 'NEGERI',
                'akreditasi' => 'A',
                'alamat' => 'Jl. Raya Labuan Km. 5,7',
                'negara_id' => '1',
                'provinsi_id' => '3',
                'kabupaten_id' => '35',
                'kecamatan_id' => '397',
                'kelurahan_id' => '7729',
                'pimpinan_id' => '1',
                'website' => 'https://mtsn1pandeglang.sch.id',
                'telepon' => '089612050291',
                'email' => 'adm@mtsn1pandeglang.sch.id',
                'nomor_surat' => null,
            ],
        ];

        foreach ($dataSekolah as $data) {
            Sekolah::create($data);
        }
    }
}

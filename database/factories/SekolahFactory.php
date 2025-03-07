<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Kabupaten;
use App\Models\Kecamatan;
use App\Models\Kelurahan;
use App\Models\Negara;
use App\Models\Pimpinan;
use App\Models\Provinsi;
use App\Models\Sekolah;

class SekolahFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Sekolah::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'nama' => fake()->word(),
            'npsn' => fake()->word(),
            'nss' => fake()->word(),
            'logo' => fake()->word(),
            'pimpinan_id' => Pimpinan::factory(),
            'akreditasi' => fake()->word(),
            'alamat' => fake()->word(),
            'negara_id' => Negara::factory(),
            'provinsi_id' => Provinsi::factory(),
            'kabupaten_id' => Kabupaten::factory(),
            'kecamatan_id' => Kecamatan::factory(),
            'kelurahan_id' => Kelurahan::factory(),
            'website' => fake()->word(),
            'telepon' => fake()->word(),
            'email' => fake()->safeEmail(),
        ];
    }
}

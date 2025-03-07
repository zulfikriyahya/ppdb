<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Informasi;
use App\Models\TahunPelajaran;

class InformasiFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Informasi::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'judul' => fake()->word(),
            'isi' => fake()->word(),
            'gambar' => fake()->word(),
            'tanggal' => fake()->date(),
            'tahun_pelajaran_id' => TahunPelajaran::factory(),
            'status' => fake()->word(),
        ];
    }
}

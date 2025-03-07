<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\JalurPendaftaran;
use App\Models\TahunPelajaran;

class JalurPendaftaranFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = JalurPendaftaran::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'nama' => fake()->word(),
            'kuantitas' => fake()->numberBetween(-10000, 10000),
            'tahun_pelajaran_id' => TahunPelajaran::factory(),
        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Pimpinan;

class PimpinanFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Pimpinan::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'nama' => fake()->word(),
            'nip' => fake()->word(),
            'periode_awal' => fake()->date(),
            'periode_akhir' => fake()->date(),
            'berkas_foto' => fake()->word(),
            'berkas_tte' => fake()->word(),
            'status' => fake()->word(),
        ];
    }
}

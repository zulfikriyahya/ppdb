<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Kelas;
use App\Models\TahunPelajaran;

class KelasFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Kelas::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'nama' => fake()->word(),
            'total_pria' => fake()->numberBetween(-10000, 10000),
            'total_wanita' => fake()->numberBetween(-10000, 10000),
            'tahun_pelajaran_id' => TahunPelajaran::factory(),
        ];
    }
}

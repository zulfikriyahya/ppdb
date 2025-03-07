<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Prestasi;

class PrestasiFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Prestasi::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'nama' => fake()->word(),
            'tingkat' => fake()->numberBetween(-10000, 10000),
            'kategori' => fake()->word(),
            'peringkat' => fake()->numberBetween(-10000, 10000),
        ];
    }
}

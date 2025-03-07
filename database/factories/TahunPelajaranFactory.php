<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\TahunPelajaran;

class TahunPelajaranFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = TahunPelajaran::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'nama' => fake()->word(),
            'tanggal_pendaftaran_mulai' => fake()->date(),
            'tanggal_pengumuman_jalur_prestasi' => fake()->dateTime(),
            'tanggal_tes_akademik' => fake()->date(),
            'tanggal_tes_praktik' => fake()->date(),
            'tanggal_pengumuman_jalur_reguler' => fake()->dateTime(),
            'tanggal_registrasi_berkas' => fake()->date(),
            'tanggal_pendaftaran_selesai' => fake()->date(),
            'kuantitas' => fake()->numberBetween(-10000, 10000),
            'status' => fake()->word(),
        ];
    }
}

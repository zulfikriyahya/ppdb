<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\CalonSiswa;
use App\Models\JalurPendaftaran;
use App\Models\Kabupaten;
use App\Models\Kecamatan;
use App\Models\Kela;
use App\Models\Kelurahan;
use App\Models\Negara;
use App\Models\Prestasi;
use App\Models\Provinsi;
use App\Models\SekolahAsal;

class CalonSiswaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CalonSiswa::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'nama' => fake()->word(),
            'nik' => fake()->word(),
            'nisn' => fake()->word(),
            'tempat_lahir' => fake()->word(),
            'tanggal_lahir' => fake()->date(),
            'tahun_lulus' => fake()->date(),
            'jenis_kelamin' => fake()->word(),
            'golongan_darah' => fake()->word(),
            'agama' => fake()->word(),
            'anak_ke' => fake()->numberBetween(-10000, 10000),
            'jumlah_saudara' => fake()->numberBetween(-10000, 10000),
            'tinggal_bersama' => fake()->word(),
            'jarak_ke_sekolah' => fake()->word(),
            'disabilitas' => fake()->word(),
            'tinggi_badan' => fake()->numberBetween(-10000, 10000),
            'berat_badan' => fake()->numberBetween(-10000, 10000),
            'no_kip' => fake()->word(),
            'siswa_telepon' => fake()->word(),
            'siswa_alamat' => fake()->word(),
            'siswa_negara_id' => Negara::factory(),
            'siswa_provinsi_id' => Provinsi::factory(),
            'siswa_kabupaten_id' => Kabupaten::factory(),
            'siswa_kecamatan_id' => Kecamatan::factory(),
            'siswa_kelurahan_id' => Kelurahan::factory(),
            'berkas_foto' => fake()->word(),
            'berkas_kk' => fake()->word(),
            'berkas_akta' => fake()->word(),
            'berkas_kip' => fake()->word(),
            'berkas_nisn' => fake()->word(),
            'berkas_skbb' => fake()->word(),
            'berkas_skab' => fake()->word(),
            'berkas_prestasi' => fake()->word(),
            'ibu_nama' => fake()->word(),
            'ibu_telepon' => fake()->word(),
            'ibu_pekerjaan' => fake()->word(),
            'ibu_status' => fake()->word(),
            'ibu_alamat' => fake()->word(),
            'ibu_negara_id' => Negara::factory(),
            'ibu_provinsi_id' => Provinsi::factory(),
            'ibu_kabupaten_id' => Kabupaten::factory(),
            'ibu_kecamatan_id' => Kecamatan::factory(),
            'ibu_kelurahan_id' => Kelurahan::factory(),
            'ayah_nama' => fake()->word(),
            'ayah_telepon' => fake()->word(),
            'ayah_pekerjaan' => fake()->word(),
            'ayah_status' => fake()->word(),
            'ayah_alamat' => fake()->word(),
            'ayah_negara_id' => Negara::factory(),
            'ayah_provinsi_id' => Provinsi::factory(),
            'ayah_kabupaten_id' => Kabupaten::factory(),
            'ayah_kecamatan_id' => Kecamatan::factory(),
            'ayah_kelurahan_id' => Kelurahan::factory(),
            'wali_nama' => fake()->word(),
            'wali_telepon' => fake()->word(),
            'wali_pekerjaan' => fake()->word(),
            'wali_status' => fake()->word(),
            'wali_alamat' => fake()->word(),
            'wali_negara_id' => Negara::factory(),
            'wali_provinsi_id' => Provinsi::factory(),
            'wali_kabupaten_id' => Kabupaten::factory(),
            'wali_kecamatan_id' => Kecamatan::factory(),
            'wali_kelurahan_id' => Kelurahan::factory(),
            'sekolah_asal_id' => SekolahAsal::factory(),
            'jalur_pendaftaran_id' => JalurPendaftaran::factory(),
            'prestasi_id' => Prestasi::factory(),
            'peminatan_ekstrakurikuler' => fake()->word(),
            'peminatan_pelajaran' => fake()->word(),
            'nilai_ipa' => fake()->numberBetween(-10000, 10000),
            'nilai_ips' => fake()->numberBetween(-10000, 10000),
            'nilai_bind' => fake()->numberBetween(-10000, 10000),
            'nilai_mtk' => fake()->numberBetween(-10000, 10000),
            'bobot_nilai_akademik' => fake()->numberBetween(-10000, 10000),
            'bobot_nilai_praktik' => fake()->numberBetween(-10000, 10000),
            'nilai_akademik' => fake()->numberBetween(-10000, 10000),
            'nilai_praktik' => fake()->numberBetween(-10000, 10000),
            'status_pendaftaran' => fake()->word(),
            'kelas_id' => Kela::factory(),
            'tes_sesi' => fake()->word(),
            'tes_ruang' => fake()->word(),
            'tes_akademik' => fake()->dateTime(),
            'tes_praktik' => fake()->dateTime(),
            'negara_id' => Negara::factory(),
            'provinsi_id' => Provinsi::factory(),
            'kabupaten_id' => Kabupaten::factory(),
            'kecamatan_id' => Kecamatan::factory(),
            'kelurahan_id' => Kelurahan::factory(),
        ];
    }
}

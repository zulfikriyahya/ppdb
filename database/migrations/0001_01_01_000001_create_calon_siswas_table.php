<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('calon_siswas', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('nama');
            $table->string('nik');
            $table->string('kk');
            $table->string('nisn', 10)->unique();
            $table->foreign('nisn')->references('username')->on('users')->onUpdate('cascade');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('tahun_lulus');
            $table->enum('jenis_kelamin', ['Pria', 'Wanita']);
            $table->enum('golongan_darah', ['A-', 'A+', 'B-', 'B+', 'AB-', 'AB+', 'O+', 'O-']);
            $table->enum('agama', ['Islam', 'Kristen Katholik', 'Kristen Protestan', 'Hindu', 'Buddha', 'Konghucu']);
            $table->integer('anak_ke');
            $table->integer('jumlah_saudara');
            $table->enum('tinggal_bersama', ['Orang Tua', 'Saudara', 'Panti Asuhan', 'Kost', 'Lainnya']);
            $table->enum('jarak_ke_sekolah', ['0 - 1 Km', '1 - 5 Km', '5 - 10 Km', '10 - 15 Km', '15 - 20 Km', '20 - 25 Km', '25 - 30 Km']);
            $table->enum('disabilitas', ['Non Disabilitas', 'Fisik', 'Penglihatan', 'Pendengaran', 'Kognitif', 'Mental', 'Lainnya']);
            $table->integer('tinggi_badan')->nullable();
            $table->integer('berat_badan')->nullable();
            $table->string('no_kip')->unique()->nullable();
            $table->string('no_kks')->unique()->nullable();
            $table->string('no_pkh')->unique()->nullable();
            $table->string('siswa_telepon')->nullable();
            $table->string('siswa_alamat');
            $table->foreignId('siswa_negara_id')->constrained('negaras')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('siswa_provinsi_id')->constrained('provinsis')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('siswa_kabupaten_id')->constrained('kabupatens')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('siswa_kecamatan_id')->constrained('kecamatans')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('siswa_kelurahan_id')->constrained('kelurahans')->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('berkas_foto');
            $table->string('berkas_kk');
            $table->string('berkas_akta');
            $table->string('berkas_kip')->nullable();
            $table->string('berkas_kks')->nullable();
            $table->string('berkas_pkh')->nullable();
            $table->string('berkas_nisn');
            $table->string('berkas_skbb');
            $table->string('berkas_skab');
            $table->string('berkas_prestasi')->nullable();
            $table->string('ibu_nama');
            $table->string('ibu_nik');
            $table->string('ibu_telepon')->nullable();
            $table->string('ibu_pekerjaan');
            $table->string('ibu_penghasilan');
            $table->string('ibu_pendidikan');
            $table->enum('ibu_status', ['Hidup', 'Meninggal']);
            $table->string('ibu_alamat');
            $table->foreignId('ibu_negara_id')->constrained('negaras')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('ibu_provinsi_id')->constrained('provinsis')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('ibu_kabupaten_id')->constrained('kabupatens')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('ibu_kecamatan_id')->constrained('kecamatans')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('ibu_kelurahan_id')->constrained('kelurahans')->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('ayah_nama');
            $table->string('ayah_nik');
            $table->string('ayah_telepon')->nullable();
            $table->string('ayah_pekerjaan');
            $table->string('ayah_penghasilan');
            $table->string('ayah_pendidikan');
            $table->enum('ayah_status', ['Hidup', 'Meninggal']);
            $table->string('kepemilikan_rumah');
            $table->string('ayah_alamat');
            $table->foreignId('ayah_negara_id')->constrained('negaras')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('ayah_provinsi_id')->constrained('provinsis')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('ayah_kabupaten_id')->constrained('kabupatens')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('ayah_kecamatan_id')->constrained('kecamatans')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('ayah_kelurahan_id')->constrained('kelurahans')->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('wali_nama')->nullable();
            $table->string('wali_nik')->nullable();
            $table->string('wali_telepon')->nullable();
            $table->string('wali_pekerjaan')->nullable();
            $table->string('wali_penghasilan')->nullable();
            $table->string('wali_pendidikan')->nullable();
            $table->enum('wali_status', ['Hidup', 'Meninggal'])->nullable();
            $table->string('wali_alamat')->nullable();
            $table->foreignId('wali_negara_id')->nullable()->constrained('negaras')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('wali_provinsi_id')->nullable()->constrained('provinsis')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('wali_kabupaten_id')->nullable()->constrained('kabupatens')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('wali_kecamatan_id')->nullable()->constrained('kecamatans')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('wali_kelurahan_id')->nullable()->constrained('kelurahans')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('sekolah_asal_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('jalur_pendaftaran_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('prestasi_id')->nullable()->constrained('prestasis')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('ekstrakurikuler_id')->constrained('ekstrakurikulers')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('mata_pelajaran_id')->constrained('mata_pelajarans')->cascadeOnDelete()->cascadeOnUpdate();
            $table->integer('nilai_ipa')->nullable();
            $table->integer('nilai_ips')->nullable();
            $table->integer('nilai_matematika')->nullable();
            $table->integer('nilai_indonesia')->nullable();
            $table->integer('nilai_inggris')->nullable();
            $table->integer('nilai_arab')->nullable();
            $table->integer('bobot_nilai_akademik')->nullable();
            $table->integer('bobot_nilai_praktik')->nullable();
            $table->integer('nilai_akademik')->nullable();
            $table->integer('nilai_praktik')->nullable();
            $table->enum('status_pendaftaran', ['Diproses', 'Berkas Tidak Lengkap', 'Diverifikasi', 'Ditolak', 'Diterima', 'Diterima Di Kelas Reguler', 'Diterima Di Kelas Unggulan'])->default('Diproses')->nullable();
            $table->foreignId('kelas_id')->nullable()->constrained('kelas')->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('tes_sesi')->nullable();
            $table->string('tes_ruang')->nullable();
            $table->dateTime('tes_akademik')->nullable();
            $table->dateTime('tes_praktik')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::enableForeignKeyConstraints();
    }

    public function down(): void
    {
        Schema::dropIfExists('calon_siswas');
    }
};

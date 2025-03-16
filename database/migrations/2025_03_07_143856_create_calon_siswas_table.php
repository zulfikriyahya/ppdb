<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    public function up(): void
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('calon_siswas', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nik');
            $table->string('kk');
            $table->string('nisn');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->date('tahun_lulus');
            $table->enum('jenis_kelamin', ['Pria', 'Wanita']);
            $table->enum('golongan_darah', ['A-', 'A+', 'B-', 'B+', 'AB-', 'AB+', 'O+', 'O-']);
            $table->enum('agama', ['Islam', 'Kristen Katholik', 'Kristen Protestan', 'Hindu', 'Buddha', 'Konghucu']);
            $table->integer('anak_ke');
            $table->integer('jumlah_saudara');
            $table->enum('tinggal_bersama', ['Orang Tua', 'Saudara', 'Panti Asuhan', 'Kost', 'Lainnya']);
            $table->enum('jarak_ke_sekolah', ['0 - 1 Km', '1 - 5 Km', '5 - 10 Km', '10 - 50 Km', '50 - 100 Km']);
            $table->enum('disabilitas', ['Non Disabilitas', 'Fisik', 'Penglihatan', 'Pendengaran', 'Kognitif', 'Mental', 'Lainnya']);
            $table->integer('tinggi_badan')->nullable();
            $table->integer('berat_badan')->nullable();
            $table->string('no_kip')->nullable();
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
            $table->string('berkas_nisn')->nullable();
            $table->string('berkas_skbb');
            $table->string('berkas_skab');
            $table->string('berkas_prestasi')->nullable();
            $table->string('ibu_nama');
            $table->string('ibu_telepon')->nullable();
            $table->string('ibu_pekerjaan')->nullable();
            $table->enum('ibu_status', ['Hidup', 'Meninggal']);
            $table->string('ibu_alamat');
            $table->foreignId('ibu_negara_id')->constrained('negaras')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('ibu_provinsi_id')->constrained('provinsis')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('ibu_kabupaten_id')->constrained('kabupatens')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('ibu_kecamatan_id')->constrained('kecamatans')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('ibu_kelurahan_id')->constrained('kelurahans')->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('ayah_nama');
            $table->string('ayah_telepon')->nullable();
            $table->string('ayah_pekerjaan')->nullable();
            $table->enum('ayah_status', ['Hidup', 'Meninggal']);
            $table->string('ayah_alamat');
            $table->foreignId('ayah_negara_id')->constrained('negaras')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('ayah_provinsi_id')->constrained('provinsis')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('ayah_kabupaten_id')->constrained('kabupatens')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('ayah_kecamatan_id')->constrained('kecamatans')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('ayah_kelurahan_id')->constrained('kelurahans')->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('wali_nama')->nullable();
            $table->string('wali_telepon')->nullable();
            $table->string('wali_pekerjaan')->nullable();
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
            $table->enum('peminatan_ekstrakurikuler', ['Pramuka', 'Paskibra', 'Kesehatan', 'Kebersihan', 'Kesenian', 'Kerohanian', 'Olahraga Footsal', 'Olahraga Bulu Tangkis', 'Olahraga Voli', 'Olahraga Renang']);
            $table->enum('peminatan_pelajaran', ['IPA', 'IPS', 'Matematika', 'Bahasa Indonesia', 'Bahasa Arab', 'Bahasa Inggris', 'Lainnya']);
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
            $table->dateTime('tes_akademik_mulai')->nullable();
            $table->dateTime('tes_akademik_selesai')->nullable();
            $table->dateTime('tes_praktik_mulai')->nullable();
            $table->dateTime('tes_praktik_selesai')->nullable();
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

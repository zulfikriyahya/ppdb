<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('tahun_pendaftarans', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->date('tanggal_ppdb_mulai');
            $table->date('tanggal_ppdb_selesai');
            $table->dateTime('tanggal_pendaftaran_jalur_prestasi_mulai')->nullable();
            $table->dateTime('tanggal_pendaftaran_jalur_prestasi_selesai')->nullable();
            $table->dateTime('tanggal_pengumuman_jalur_prestasi_mulai')->nullable();
            $table->dateTime('tanggal_pengumuman_jalur_prestasi_selesai')->nullable();
            $table->dateTime('tanggal_pendaftaran_jalur_reguler_mulai')->nullable();
            $table->dateTime('tanggal_pendaftaran_jalur_reguler_selesai')->nullable();
            $table->dateTime('tanggal_pengumuman_jalur_reguler_mulai')->nullable();
            $table->dateTime('tanggal_pengumuman_jalur_reguler_selesai')->nullable();
            $table->dateTime('tanggal_pendaftaran_jalur_afirmasi_mulai')->nullable();
            $table->dateTime('tanggal_pendaftaran_jalur_afirmasi_selesai')->nullable();
            $table->dateTime('tanggal_pengumuman_jalur_afirmasi_mulai')->nullable();
            $table->dateTime('tanggal_pengumuman_jalur_afirmasi_selesai')->nullable();
            $table->dateTime('tanggal_pendaftaran_jalur_zonasi_mulai')->nullable();
            $table->dateTime('tanggal_pendaftaran_jalur_zonasi_selesai')->nullable();
            $table->dateTime('tanggal_pengumuman_jalur_zonasi_mulai')->nullable();
            $table->dateTime('tanggal_pengumuman_jalur_zonasi_selesai')->nullable();
            $table->dateTime('tanggal_pendaftaran_jalur_mutasi_mulai')->nullable();
            $table->dateTime('tanggal_pendaftaran_jalur_mutasi_selesai')->nullable();
            $table->dateTime('tanggal_pengumuman_jalur_mutasi_mulai')->nullable();
            $table->dateTime('tanggal_pengumuman_jalur_mutasi_selesai')->nullable();
            $table->dateTime('tanggal_penerbitan_kartu_tes_mulai')->nullable();
            $table->dateTime('tanggal_penerbitan_kartu_tes_selesai')->nullable();
            $table->dateTime('tanggal_tes_akademik_mulai')->nullable();
            $table->dateTime('tanggal_tes_akademik_selesai')->nullable();
            $table->dateTime('tanggal_tes_praktik_mulai')->nullable();
            $table->dateTime('tanggal_tes_praktik_selesai')->nullable();
            $table->dateTime('tanggal_registrasi_berkas_mulai')->nullable();
            $table->dateTime('tanggal_registrasi_berkas_selesai')->nullable();
            $table->integer('kuantitas');
            $table->enum('status', ['Aktif', 'Nonaktif'])->default('Aktif');
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::enableForeignKeyConstraints();
    }

    public function down(): void
    {
        Schema::dropIfExists('tahun_pendaftarans');
    }
};

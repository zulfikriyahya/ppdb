<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('tahun_pelajarans', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->dateTime('tanggal_pendaftaran_mulai');
            $table->dateTime('tanggal_pengumuman_jalur_prestasi_mulai');
            $table->dateTime('tanggal_pengumuman_jalur_prestasi_selesai');
            $table->dateTime('tanggal_penerbitan_kartu_tes_mulai');
            $table->dateTime('tanggal_penerbitan_kartu_tes_selesai');
            $table->dateTime('tanggal_tes_akademik_mulai');
            $table->dateTime('tanggal_tes_akademik_selesai');
            $table->dateTime('tanggal_tes_praktik_mulai');
            $table->dateTime('tanggal_tes_praktik_selesai');
            $table->dateTime('tanggal_pengumuman_jalur_reguler_mulai');
            $table->dateTime('tanggal_pengumuman_jalur_reguler_selesai');
            $table->dateTime('tanggal_registrasi_berkas_mulai');
            $table->dateTime('tanggal_registrasi_berkas_selesai');
            $table->dateTime('tanggal_pendaftaran_selesai');
            $table->integer('kuantitas');
            $table->enum('status', ['Aktif', 'Nonaktif'])->default('Aktif');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tahun_pelajarans');
    }
};

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
            $table->dateTime('tanggal_pendaftaran_jalur_prestasi_mulai');
            $table->dateTime('tanggal_pendaftaran_jalur_prestasi_selesai');
            $table->dateTime('tanggal_pengumuman_jalur_prestasi_mulai');
            $table->dateTime('tanggal_pengumuman_jalur_prestasi_selesai');
            $table->dateTime('tanggal_pendaftaran_jalur_reguler_mulai');
            $table->dateTime('tanggal_pendaftaran_jalur_reguler_selesai');
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

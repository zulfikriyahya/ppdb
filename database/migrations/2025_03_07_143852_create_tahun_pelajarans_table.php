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
            $table->date('tanggal_pendaftaran_mulai');
            $table->dateTime('tanggal_pengumuman_jalur_prestasi');
            $table->date('tanggal_tes_akademik');
            $table->date('tanggal_tes_praktik');
            $table->dateTime('tanggal_pengumuman_jalur_reguler');
            $table->date('tanggal_registrasi_berkas');
            $table->date('tanggal_pendaftaran_selesai');
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

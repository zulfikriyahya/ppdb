<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('formulir_prestasis', function (Blueprint $table) {
            $table->id();

            // Pemilik formulir — pakai char(36) karena calon_siswas.id adalah UUID
            $table->char('calon_siswa_id', 36);
            $table->foreign('calon_siswa_id')
                ->references('id')
                ->on('calon_siswas')
                ->cascadeOnDelete()
                ->cascadeOnUpdate();

            // Referensi ke master prestasi (jenis, tingkat, kategori, peringkat)
            $table->foreignId('prestasi_id')
                ->constrained('prestasis')
                ->cascadeOnUpdate();

            // Data spesifik yang diisi pendaftar
            $table->string('nama_prestasi');
            $table->year('tahun_prestasi');
            $table->string('penyelenggara_prestasi');

            // Berkas bukti prestasi (upload per entri)
            $table->string('berkas_prestasi')->nullable();

            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    public function down(): void
    {
        Schema::dropIfExists('formulir_prestasis');
    }
};

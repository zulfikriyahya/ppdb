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

            // OPTIMASI: Menggunakan foreignUuid bawaan Laravel
            $table->foreignUuid('calon_siswa_id')
                ->constrained('calon_siswas')
                ->cascadeOnDelete()
                ->cascadeOnUpdate();

            $table->foreignId('prestasi_id')
                ->constrained('prestasis')
                ->cascadeOnUpdate();

            $table->string('nama_prestasi');
            $table->year('tahun_prestasi');
            $table->string('penyelenggara_prestasi');
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

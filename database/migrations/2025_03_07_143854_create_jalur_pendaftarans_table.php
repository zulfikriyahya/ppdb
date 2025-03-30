<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    public function up(): void
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('jalur_pendaftarans', function (Blueprint $table) {
            $table->id();
            $table->enum('nama', ['Prestasi', 'Reguler', 'Mutasi', 'Zonasi', 'Afirmasi']);
            $table->integer('kuantitas');
            $table->enum('status', ['Aktif', 'Nonaktif']);
            $table->foreignId('tahun_pendaftaran_id')->constrained('tahun_pendaftarans')->cascadeOnDelete()->cascadeOnUpdate();
            $table->timestamps();
        });
        Schema::enableForeignKeyConstraints();
    }

    public function down(): void
    {
        Schema::dropIfExists('jalur_pendaftarans');
    }
};

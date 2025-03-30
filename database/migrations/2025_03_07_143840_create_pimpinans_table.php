<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pimpinans', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nip')->nullable();
            $table->foreignId('tahun_pendaftaran_id')->constrained('tahun_pendaftarans')->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('berkas_foto')->nullable();
            $table->string('berkas_tte')->nullable();
            $table->string('berkas_sk')->nullable();
            $table->enum('status', ['Aktif', 'Nonaktif'])->default('Aktif');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pimpinans');
    }
};

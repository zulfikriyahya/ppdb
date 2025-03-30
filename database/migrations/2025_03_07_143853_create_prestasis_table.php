<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    public function up(): void
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('prestasis', function (Blueprint $table) {
            $table->id();
            $table->enum('jenis', ['Hafalan Al-Quran', 'Olimpiade/Kejuaraan']);
            $table->string('nama');
            $table->enum('tingkat', ['Nasional', 'Provinsi', 'Kabupaten/Kota'])->nullable();
            $table->enum('kategori', ['Regu/Kelompok', 'Individu'])->nullable();
            $table->enum('peringkat', ['1', '2', '3'])->nullable();
            $table->timestamps();
        });
        Schema::enableForeignKeyConstraints();
    }

    public function down(): void
    {
        Schema::dropIfExists('prestasis');
    }
};

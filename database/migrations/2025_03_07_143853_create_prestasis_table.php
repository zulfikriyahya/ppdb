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
            $table->string('nama');
            $table->enum('tingkat', ['Nasional', 'Provinsi', 'Kabupaten/Kota']);
            $table->enum('kategori', ['Regu', 'Tunggal']);
            $table->enum('peringkat', ['1', '2', '3']);
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::enableForeignKeyConstraints();
    }
    public function down(): void
    {
        Schema::dropIfExists('prestasis');
    }
};

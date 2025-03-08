<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    public function up(): void
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('sekolahs', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('npsn')->nullable();
            $table->string('nss')->nullable();
            $table->string('logo')->nullable();
            $table->foreignId('pimpinan_id')->constrained('pimpinans')->cascadeOnDelete()->cascadeOnUpdate();
            $table->enum('akreditasi', ['A', 'B', 'C', 'D'])->nullable();
            $table->string('alamat');
            $table->foreignId('negara_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('provinsi_id')->constrained('provinsis')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('kabupaten_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('kecamatan_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('kelurahan_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('website')->nullable();
            $table->string('telepon')->nullable();
            $table->string('email')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::enableForeignKeyConstraints();
    }
    public function down(): void
    {
        Schema::dropIfExists('sekolahs');
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('sekolahs', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 50);
            $table->string('npsn', 8)->nullable();
            $table->string('nss', 12)->nullable();
            $table->string('logo')->nullable();
            $table->string('logo_institusi')->nullable();
            $table->enum('jenjang', ['PAUD', 'TK', 'SD', 'MI', 'SMP', 'MTS', 'SMA', 'SMK', 'MA'])->nullable();
            $table->enum('status', ['NEGERI', 'SWASTA'])->nullable();
            $table->enum('akreditasi', ['A', 'B', 'C', 'D'])->nullable();
            $table->string('alamat', 50)->nullable();
            $table->foreignId('negara_id')->nullable()->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('provinsi_id')->nullable()->constrained('provinsis')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('kabupaten_id')->nullable()->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('kecamatan_id')->nullable()->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('kelurahan_id')->nullable()->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('pimpinan_id')->nullable()->constrained('pimpinans')->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('website', 50)->nullable();
            $table->string('telepon', 13)->nullable();
            $table->string('email', 50)->nullable();
            $table->string('nomor_surat', 50)->nullable();
            $table->timestamps();
        });
        Schema::enableForeignKeyConstraints();
    }

    public function down(): void
    {
        Schema::dropIfExists('sekolahs');
    }
};

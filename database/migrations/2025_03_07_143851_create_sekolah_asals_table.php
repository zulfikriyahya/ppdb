<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    public function up(): void
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('sekolah_asals', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('npsn')->nullable();
            $table->string('nss')->nullable();
            $table->string('logo')->nullable();
            $table->enum('akreditasi', ['A', 'B', 'C', 'D'])->nullable();
            $table->string('alamat')->nullable();
            $table->foreignId('negara_id')->nullable()->constrained('negaras')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('provinsi_id')->nullable()->constrained('provinsis')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('kabupaten_id')->nullable()->constrained('kabupatens')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('kecamatan_id')->nullable()->constrained('kecamatans')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('kelurahan_id')->nullable()->constrained('kelurahans')->cascadeOnDelete()->cascadeOnUpdate();
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
        Schema::dropIfExists('sekolah_asals');
    }
};

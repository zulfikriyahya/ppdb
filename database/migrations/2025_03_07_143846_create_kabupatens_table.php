<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('kabupatens', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->foreignId('provinsi_id')->constrained('provinsis')->cascadeOnDelete()->cascadeOnUpdate();
            $table->timestamps();
        });
        Schema::enableForeignKeyConstraints();
    }

    public function down(): void
    {
        Schema::dropIfExists('kabupatens');
    }
};

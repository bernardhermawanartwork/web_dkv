<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('hibahs', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('jenis_hibah');
            $table->text('judul_hibah');
            $table->string('nama_dosen');
            $table->string('tahun');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hibahs');
    }
};

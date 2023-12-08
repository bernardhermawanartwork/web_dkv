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
        Schema::create('kuliah_umums', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('pembicara');
            $table->string('moderator');
            $table->string('tema');
            $table->text('deskripsi');
            $table->datetime('tanggal')->nullable();
            $table->text('gambar');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kuliah_umums');
    }
};

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
        Schema::create('kenapa_harus_dkvs', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('headline');
            $table->text('isi');
            $table->text('gambar');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kenapa_harus_dkvs');
    }
};

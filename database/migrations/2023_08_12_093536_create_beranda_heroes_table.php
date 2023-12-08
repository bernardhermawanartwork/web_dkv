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
        Schema::create('beranda_heroes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('headline');
            $table->string('isi');
            $table->string('action_link');
            $table->string('action_label');
            $table->text('gambar');
            $table->boolean('default');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('beranda_heroes');
    }
};

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
        Schema::create('beranda_video_sections', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('headline');
            $table->text('isi');
            $table->string('action_link');           
            $table->string('action_label');           
            $table->text('video_url');
            $table->boolean('default');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('beranda_video_sections');
    }
};

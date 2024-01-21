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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('body');
            $table->string('type'); // Ejemplo: "Partido", "Juego", "Liga", etc.
            $table->dateTime('match_date');
            $table->unsignedBigInteger('team_id'); // Si es relevante para la publicación.
            $table->string('slug');
            $table->unsignedBigInteger('autor_id');
            $table->unsignedBigInteger('season_name');
            // $table->unsignedBigInteger('name');
            $table->unsignedBigInteger('category_name');
            $table->timestamps();
            $table->foreign('autor_id')->references('id')->on('users');
            $table->foreign('season_name')->references('id')->on('seasons');
            $table->foreign('category_name')->references('id')->on('categories');
            $table->string('img_url');
            // $table->foreign('season_name')->references('id')->on('seasons');
            // Agrega relaciones adicionales según sea necesario.
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};

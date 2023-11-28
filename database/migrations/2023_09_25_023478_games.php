<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->date('date')->nullable();
            $table->time('time')->nullable();
            $table->string('result')->nullable();
            $table->unsignedBigInteger('stadium_name')->nullable();
            $table->unsignedBigInteger('referee_name')->nullable();
            $table->unsignedBigInteger('league_name')->nullable();
            $table->unsignedBigInteger('cup_name')->nullable();
            $table->unsignedBigInteger('season_name')->nullable();
            $table->unsignedBigInteger('trophy_name')->nullable();
            $table->unsignedBigInteger('municipality_name')->nullable();
            $table->foreign('municipality_name')->references('id')->on('municipalities');
            $table->foreign('stadium_name')->references('id')->on('stadia');
            $table->foreign('referee_name')->references('id')->on('referees');
            $table->foreign('league_name')->references('id')->on('leagues');
            $table->foreign('cup_name')->references('id')->on('cups')->nullable();
            $table->foreign('season_name')->references('id')->on('seasons');
            $table->foreign('trophy_name')->references('id')->on('trophies')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('games');
    }
};

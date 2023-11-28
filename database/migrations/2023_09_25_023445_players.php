<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('players', function (Blueprint $table) {
            $table->id();
            $table->string('player_name')->nullable();
            $table->date('birth_date')->nullable();
            $table->string('position')->nullable();
            $table->string('goals')->nullable();
            $table->unsignedBigInteger('team_name');
            $table->foreign('team_name')->references('id')->on('teams');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('players');
    }
};
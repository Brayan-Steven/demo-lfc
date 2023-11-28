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
        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            $table->string('team_name');
            $table->unsignedBigInteger('league_name');
            $table->foreign('league_name')->references('id')->on('leagues');
            $table->unsignedBigInteger('coach_name');
            $table->foreign('coach_name')->references('id')->on('coaches');
            $table->unsignedBigInteger('stadium_name');
            $table->foreign('stadium_name')->references('id')->on('stadia');
            $table->unsignedBigInteger('sponsor_name');
            $table->foreign('sponsor_name')->references('id')->on('sponsors');
            $table->string('imge_url');
            $table->timestamps();
        }); 
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teams');
    }
};

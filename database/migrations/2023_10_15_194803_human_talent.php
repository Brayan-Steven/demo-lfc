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
        Schema::create('human_talent', function (Blueprint $table) {
            $table->id();
            $table->string('name_talent');
            $table->date('talent_position');
            $table->date('image_url_talent');
            $table->unsignedBigInteger('categoty_name');
            $table->foreign('categoty_name')->references('id')->on('categories');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};

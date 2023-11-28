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
        Schema::create('cups', function (Blueprint $table) {
            $table->id();
            $table->string('cup_name');
            $table->date('start_date');
            $table->date('end_date');
            $table->unsignedBigInteger('trophy_name');
            $table->unsignedBigInteger('category_name');
            $table->foreign('trophy_name')->references('id')->on('trophies');
            $table->foreign('category_name')->references('id')->on('categories');
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
        Schema::dropIfExists('cups');
    }
};

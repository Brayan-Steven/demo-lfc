<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('trophies', function (Blueprint $table) {
            $table->id();
            $table->string('trophy_name');
            $table->unsignedBigInteger('category_name');
            $table->foreign('category_name')->references('id')->on('categories');
            $table->string('description');
            $table->unsignedBigInteger('sponsor_name');
            $table->foreign('sponsor_name')->references('id')->on('sponsors');
            $table->string('imge_url_trophy');
            $table->timestamps();
        });
    }



    public function down()
    {
        Schema::dropIfExists('trophies');
    }
};
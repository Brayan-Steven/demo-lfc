<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('sponsors', function (Blueprint $table) {
            $table->id();
            $table->string('sponsor_name')->nullable();
            $table->string('contact')->nullable();;
            $table->string('sponsorship_type')->nullable();
            $table->binary('imge_url');
            $table->timestamps();
        }); 
    }

    public function down()
    {
        Schema::dropIfExists('sponsors');
    }
};

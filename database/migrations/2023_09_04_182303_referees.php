<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('referees', function (Blueprint $table) {
            $table->id();
            $table->string('type_document');
            $table->string('referee_name');
            $table->string('identity_document');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('referees');
    }
};

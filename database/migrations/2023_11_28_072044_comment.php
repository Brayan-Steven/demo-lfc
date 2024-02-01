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
        Schema::create('comment', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('posts');
            $table->foreign('posts')->references('id')->on('posts');
            $table->string('contacts_name');
            $table->string('contacts_email');
            $table->string('contacts_phone');
            $table->string('contacts_message');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('comment');

    }
};

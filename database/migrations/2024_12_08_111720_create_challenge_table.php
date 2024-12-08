<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('challenge', function (Blueprint $table) {
            $table->id('idChallenge');
            $table->string('title', 255);
            $table->text('message');
            $table->date('creationDate');
            $table->unsignedBigInteger('idCategory')->nullable();
            $table->foreign('idCategory')->references('idCategory')->on('category');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('challenge');
    }
};

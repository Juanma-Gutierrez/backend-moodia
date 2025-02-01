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
        Schema::create('inspiring_phrase', function (Blueprint $table) {
            $table->id('idInspiringPhrase');
            $table->string('title', 255);
            $table->text('message');
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
        Schema::dropIfExists('inspiring_phrase');
    }
};

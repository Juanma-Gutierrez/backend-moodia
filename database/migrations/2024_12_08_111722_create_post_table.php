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
        Schema::create('post', function (Blueprint $table) {
            $table->id('idPost');
            $table->string('title', 255);
            $table->text('message');
            $table->date('creationDate');
            $table->integer('score');
            $table->unsignedBigInteger('idExtendedUser');
            $table->foreign('idExtendedUser')->references('idExtendedUser')->on('extended_user');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('post');
    }
};

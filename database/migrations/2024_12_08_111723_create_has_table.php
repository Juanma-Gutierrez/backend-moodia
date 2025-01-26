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
        Schema::create('has', function (Blueprint $table) {
            $table->unsignedBigInteger('idCategory');
            $table->unsignedBigInteger('idPost');
            $table->primary(['idCategory', 'idPost']);
            $table->foreign('idCategory')->references('idCategory')->on('category');
            $table->foreign('idPost')->references('idPost')->on('post')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('has');
    }
};

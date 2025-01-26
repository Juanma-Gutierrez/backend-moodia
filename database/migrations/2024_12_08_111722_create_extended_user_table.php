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
    Schema::create('extended_user', function (Blueprint $table) {
      $table->id('idExtendedUser');
      $table->date('birthDate')->nullable();
      $table->unsignedBigInteger('idCivilStatus')->nullable();
      $table->unsignedBigInteger('idGenre')->nullable();
      $table->unsignedBigInteger('idRole');
      $table->unsignedBigInteger('idEmployment')->nullable();
      $table->unsignedBigInteger('idInspiringPhrase')->nullable();
      $table->unsignedBigInteger('id');

      // Definir las relaciones
      $table->foreign('idCivilStatus')->references('idCivilStatus')->on('civil_status');
      $table->foreign('idGenre')->references('idGenre')->on('genre');
      $table->foreign('idRole')->references('idRole')->on('role');
      $table->foreign('idEmployment')->references('idEmployment')->on('employment');
      $table->foreign('idInspiringPhrase')->references('idInspiringPhrase')->on('inspiring_phrase');
      $table->foreign('id')->references('id')->on('users');

      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('extended_user');
  }
};

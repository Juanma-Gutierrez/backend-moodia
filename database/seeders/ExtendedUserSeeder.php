<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ExtendedUserSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run()
  {
    DB::table('extended_user')->insert([
      [
        'idExtendedUser' => 1,
        'birthDate' => Carbon::parse('1972-01-01'),
        'idCivilStatus' => 1,
        'idGenre' => 1,
        'idRole' => 2,
        'idEmployment' => 3,
        'idInspiringPhrase' => null,
        'id' => 1,
        'created_at' => NOW(),
        'updated_at' => NOW(),
      ],
      [
        'idExtendedUser' => 2,
        'birthDate' => Carbon::parse('2000-12-31'),
        'idCivilStatus' => 2,
        'idGenre' => 2,
        'idRole' => 1,
        'idEmployment' => 2,
        'idInspiringPhrase' => null,
        'id' => 2,
        'created_at' => NOW(),
        'updated_at' => NOW(),
      ],
      [
        'idExtendedUser' => 3,
        'birthDate' => Carbon::parse('1988-10-25'),
        'idCivilStatus' => 1,
        'idGenre' => 1,
        'idRole' => 1,
        'idEmployment' => 1,
        'idInspiringPhrase' => null,
        'id' => 3,
        'created_at' => NOW(),
        'updated_at' => NOW(),
      ],
      [
        'idExtendedUser' => 4,
        'birthDate' => Carbon::parse('1998-07-02'),
        'idCivilStatus' => 1,
        'idGenre' => 2,
        'idRole' => 1,
        'idEmployment' => 1,
        'idInspiringPhrase' => null,
        'id' => 4,
        'created_at' => NOW(),
        'updated_at' => NOW(),
      ],
    ]);
  }
}

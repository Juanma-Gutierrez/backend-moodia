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
    DB::table('extended_user')->insert(
      [
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
        [
          'idExtendedUser' => 5,
          'birthDate' => Carbon::parse('1964-07-24'),
          'idCivilStatus' => 4,
          'idGenre' => 3,
          'idRole' => 1,
          'idEmployment' => 6,
          'idInspiringPhrase' => null,
          'id' => 5,
          'created_at' => NOW(),
          'updated_at' => NOW(),
        ],
        [
          'idExtendedUser' => 6,
          'birthDate' => Carbon::parse('1951-07-04'),
          'idCivilStatus' => 6,
          'idGenre' => 2,
          'idRole' => 1,
          'idEmployment' => 3,
          'idInspiringPhrase' => null,
          'id' => 6,
          'created_at' => NOW(),
          'updated_at' => NOW(),
        ],
        [
          'idExtendedUser' => 7,
          'birthDate' => Carbon::parse('1984-08-19'),
          'idCivilStatus' => 5,
          'idGenre' => 3,
          'idRole' => 1,
          'idEmployment' => 5,
          'idInspiringPhrase' => null,
          'id' => 7,
          'created_at' => NOW(),
          'updated_at' => NOW(),
        ],
        [
          'idExtendedUser' => 8,
          'birthDate' => Carbon::parse('1981-02-17'),
          'idCivilStatus' => 4,
          'idGenre' => 1,
          'idRole' => 1,
          'idEmployment' => 3,
          'idInspiringPhrase' => null,
          'id' => 8,
          'created_at' => NOW(),
          'updated_at' => NOW(),
        ],
        [
          'idExtendedUser' => 9,
          'birthDate' => Carbon::parse('2004-04-27'),
          'idCivilStatus' => 6,
          'idGenre' => 4,
          'idRole' => 1,
          'idEmployment' => 4,
          'idInspiringPhrase' => null,
          'id' => 9,
          'created_at' => NOW(),
          'updated_at' => NOW(),
        ],
        [
          'idExtendedUser' => 10,
          'birthDate' => Carbon::parse('1955-08-04'),
          'idCivilStatus' => 5,
          'idGenre' => 1,
          'idRole' => 1,
          'idEmployment' => 4,
          'idInspiringPhrase' => null,
          'id' => 10,
          'created_at' => NOW(),
          'updated_at' => NOW(),
        ],
        [
          'idExtendedUser' => 11,
          'birthDate' => Carbon::parse('1976-09-02'),
          'idCivilStatus' => 3,
          'idGenre' => 1,
          'idRole' => 1,
          'idEmployment' => 3,
          'idInspiringPhrase' => null,
          'id' => 11,
          'created_at' => NOW(),
          'updated_at' => NOW(),
        ],
        [
          'idExtendedUser' => 12,
          'birthDate' => Carbon::parse('1983-11-03'),
          'idCivilStatus' => 5,
          'idGenre' => 3,
          'idRole' => 1,
          'idEmployment' => 4,
          'idInspiringPhrase' => null,
          'id' => 12,
          'created_at' => NOW(),
          'updated_at' => NOW(),
        ],
        [
          'idExtendedUser' => 13,
          'birthDate' => Carbon::parse('1982-02-21'),
          'idCivilStatus' => 5,
          'idGenre' => 1,
          'idRole' => 1,
          'idEmployment' => 3,
          'idInspiringPhrase' => null,
          'id' => 13,
          'created_at' => NOW(),
          'updated_at' => NOW(),
        ],
        [
          'idExtendedUser' => 14,
          'birthDate' => Carbon::parse('2008-03-12'),
          'idCivilStatus' => 3,
          'idGenre' => 1,
          'idRole' => 1,
          'idEmployment' => 3,
          'idInspiringPhrase' => null,
          'id' => 14,
          'created_at' => NOW(),
          'updated_at' => NOW(),
        ],
        [
          'idExtendedUser' => 15,
          'birthDate' => Carbon::parse('1955-12-07'),
          'idCivilStatus' => 3,
          'idGenre' => 1,
          'idRole' => 1,
          'idEmployment' => 4,
          'idInspiringPhrase' => null,
          'id' => 15,
          'created_at' => NOW(),
          'updated_at' => NOW(),
        ],
        [
          'idExtendedUser' => 16,
          'birthDate' => Carbon::parse('2008-09-18'),
          'idCivilStatus' => 4,
          'idGenre' => 2,
          'idRole' => 1,
          'idEmployment' => 5,
          'idInspiringPhrase' => null,
          'id' => 16,
          'created_at' => NOW(),
          'updated_at' => NOW(),
        ],
        [
          'idExtendedUser' => 17,
          'birthDate' => Carbon::parse('2002-03-10'),
          'idCivilStatus' => 4,
          'idGenre' => 1,
          'idRole' => 1,
          'idEmployment' => 4,
          'idInspiringPhrase' => null,
          'id' => 17,
          'created_at' => NOW(),
          'updated_at' => NOW(),
        ],
        [
          'idExtendedUser' => 18,
          'birthDate' => Carbon::parse('1996-03-20'),
          'idCivilStatus' => 2,
          'idGenre' => 2,
          'idRole' => 1,
          'idEmployment' => 5,
          'idInspiringPhrase' => null,
          'id' => 18,
          'created_at' => NOW(),
          'updated_at' => NOW(),
        ],
        [
          'idExtendedUser' => 19,
          'birthDate' => Carbon::parse('1984-05-26'),
          'idCivilStatus' => 5,
          'idGenre' => 1,
          'idRole' => 1,
          'idEmployment' => 5,
          'idInspiringPhrase' => null,
          'id' => 19,
          'created_at' => NOW(),
          'updated_at' => NOW(),
        ],
        [
          'idExtendedUser' => 20,
          'birthDate' => Carbon::parse('1987-10-02'),
          'idCivilStatus' => 3,
          'idGenre' => 2,
          'idRole' => 1,
          'idEmployment' => 2,
          'idInspiringPhrase' => null,
          'id' => 20,
          'created_at' => NOW(),
          'updated_at' => NOW(),
        ],
        [
          'idExtendedUser' => 21,
          'birthDate' => Carbon::parse('1973-07-06'),
          'idCivilStatus' => 4,
          'idGenre' => 4,
          'idRole' => 1,
          'idEmployment' => 6,
          'idInspiringPhrase' => null,
          'id' => 21,
          'created_at' => NOW(),
          'updated_at' => NOW(),
        ],
        [
          'idExtendedUser' => 22,
          'birthDate' => Carbon::parse('2006-09-22'),
          'idCivilStatus' => 2,
          'idGenre' => 2,
          'idRole' => 1,
          'idEmployment' => 2,
          'idInspiringPhrase' => null,
          'id' => 22,
          'created_at' => NOW(),
          'updated_at' => NOW(),
        ],
        [
          'idExtendedUser' => 23,
          'birthDate' => Carbon::parse('1979-02-20'),
          'idCivilStatus' => 3,
          'idGenre' => 2,
          'idRole' => 1,
          'idEmployment' => 6,
          'idInspiringPhrase' => null,
          'id' => 23,
          'created_at' => NOW(),
          'updated_at' => NOW(),
        ],
        [
          'idExtendedUser' => 24,
          'birthDate' => Carbon::parse('2008-12-15'),
          'idCivilStatus' => 3,
          'idGenre' => 3,
          'idRole' => 1,
          'idEmployment' => 5,
          'idInspiringPhrase' => null,
          'id' => 24,
          'created_at' => NOW(),
          'updated_at' => NOW(),
        ],
        [
          'idExtendedUser' => 25,
          'birthDate' => Carbon::parse('1955-07-29'),
          'idCivilStatus' => 4,
          'idGenre' => 1,
          'idRole' => 1,
          'idEmployment' => 2,
          'idInspiringPhrase' => null,
          'id' => 25,
          'created_at' => NOW(),
          'updated_at' => NOW(),
        ],
        [
          'idExtendedUser' => 26,
          'birthDate' => Carbon::parse('1982-09-09'),
          'idCivilStatus' => 2,
          'idGenre' => 4,
          'idRole' => 1,
          'idEmployment' => 4,
          'idInspiringPhrase' => null,
          'id' => 26,
          'created_at' => NOW(),
          'updated_at' => NOW(),
        ],
        [
          'idExtendedUser' => 27,
          'birthDate' => Carbon::parse('2000-01-06'),
          'idCivilStatus' => 5,
          'idGenre' => 1,
          'idRole' => 1,
          'idEmployment' => 4,
          'idInspiringPhrase' => null,
          'id' => 27,
          'created_at' => NOW(),
          'updated_at' => NOW(),
        ],
        [
          'idExtendedUser' => 28,
          'birthDate' => Carbon::parse('2003-07-02'),
          'idCivilStatus' => 3,
          'idGenre' => 2,
          'idRole' => 1,
          'idEmployment' => 3,
          'idInspiringPhrase' => null,
          'id' => 28,
          'created_at' => NOW(),
          'updated_at' => NOW(),
        ],
        [
          'idExtendedUser' => 29,
          'birthDate' => Carbon::parse('2009-01-17'),
          'idCivilStatus' => 5,
          'idGenre' => 1,
          'idRole' => 1,
          'idEmployment' => 3,
          'idInspiringPhrase' => null,
          'id' => 29,
          'created_at' => NOW(),
          'updated_at' => NOW(),
        ],
        [
          'idExtendedUser' => 30,
          'birthDate' => Carbon::parse('2008-12-31'),
          'idCivilStatus' => 2,
          'idGenre' => 2,
          'idRole' => 1,
          'idEmployment' => 2,
          'idInspiringPhrase' => null,
          'id' => 30,
          'created_at' => NOW(),
          'updated_at' => NOW(),
        ]
      ]
    );
  }
}

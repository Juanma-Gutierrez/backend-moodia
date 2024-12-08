<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('genre')->insert([
            ['idGenre' => 1, 'genre' => 'Masculino', 'created_at' => NOW(), 'updated_at' => NOW()],
            ['idGenre' => 2, 'genre' => 'Femenino', 'created_at' => NOW(), 'updated_at' => NOW()],
            ['idGenre' => 3, 'genre' => 'Otro', 'created_at' => NOW(), 'updated_at' => NOW()],
            ['idGenre' => 4, 'genre' => 'Prefiero no decirlo', 'created_at' => NOW(), 'updated_at' => NOW()],
        ]);
    }
}

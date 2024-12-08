<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('category')->insert([
            ['idCategory' => 1, 'name' => 'Familia', 'creationDate' => NOW(), 'created_at' => NOW(), 'updated_at' => NOW()],
            ['idCategory' => 2, 'name' => 'Amigos', 'creationDate' => NOW(), 'created_at' => NOW(), 'updated_at' => NOW()],
            ['idCategory' => 3, 'name' => 'Deporte', 'creationDate' => NOW(), 'created_at' => NOW(), 'updated_at' => NOW()],
            ['idCategory' => 4, 'name' => 'Estudios', 'creationDate' => NOW(), 'created_at' => NOW(), 'updated_at' => NOW()],
            ['idCategory' => 5, 'name' => 'Trabajo', 'creationDate' => NOW(), 'created_at' => NOW(), 'updated_at' => NOW()],
            ['idCategory' => 6, 'name' => 'Hobby', 'creationDate' => NOW(), 'created_at' => NOW(), 'updated_at' => NOW()],
            ['idCategory' => 7, 'name' => 'Relax', 'creationDate' => NOW(), 'created_at' => NOW(), 'updated_at' => NOW()],
        ]);
    }
}

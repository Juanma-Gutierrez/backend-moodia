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
    DB::table('category')->truncate();

    DB::table('category')->insert([
      ['idCategory' => 1, 'name' => 'Familia', 'created_at' => NOW(), 'updated_at' => NOW()],
      ['idCategory' => 2, 'name' => 'Amigos', 'created_at' => NOW(), 'updated_at' => NOW()],
      ['idCategory' => 3, 'name' => 'Deporte', 'created_at' => NOW(), 'updated_at' => NOW()],
      ['idCategory' => 4, 'name' => 'Estudios', 'created_at' => NOW(), 'updated_at' => NOW()],
      ['idCategory' => 5, 'name' => 'Trabajo', 'created_at' => NOW(), 'updated_at' => NOW()],
      ['idCategory' => 6, 'name' => 'Hobby', 'created_at' => NOW(), 'updated_at' => NOW()],
      ['idCategory' => 7, 'name' => 'Relax', 'created_at' => NOW(), 'updated_at' => NOW()],
    ]);
  }
}

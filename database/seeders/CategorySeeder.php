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
    DB::statement('SET FOREIGN_KEY_CHECKS=0;');
    DB::table('category')->delete();
    DB::statement('ALTER TABLE category AUTO_INCREMENT = 1');
    DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    DB::table('category')->insert([
      ['idCategory' => 1, 'name' => 'Familia', 'created_at' => now(), 'updated_at' => now()],
      ['idCategory' => 2, 'name' => 'Amigos', 'created_at' => now(), 'updated_at' => now()],
      ['idCategory' => 3, 'name' => 'Deporte', 'created_at' => now(), 'updated_at' => now()],
      ['idCategory' => 4, 'name' => 'Estudios', 'created_at' => now(), 'updated_at' => now()],
      ['idCategory' => 5, 'name' => 'Trabajo', 'created_at' => now(), 'updated_at' => now()],
      ['idCategory' => 6, 'name' => 'Hobby', 'created_at' => now(), 'updated_at' => now()],
      ['idCategory' => 7, 'name' => 'Relax', 'created_at' => now(), 'updated_at' => now()],
    ]);
  }
}

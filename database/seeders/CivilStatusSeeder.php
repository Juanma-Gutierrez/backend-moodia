<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CivilStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('civil_status')->insert([
            ['idCivilStatus' => 1, 'status' => 'Soltero/a', 'created_at' => NOW(), 'updated_at' => NOW()],
            ['idCivilStatus' => 2, 'status' => 'Casado/a', 'created_at' => NOW(), 'updated_at' => NOW()],
            ['idCivilStatus' => 3, 'status' => 'Divorciado/a', 'created_at' => NOW(), 'updated_at' => NOW()],
            ['idCivilStatus' => 4, 'status' => 'Viudo/a', 'created_at' => NOW(), 'updated_at' => NOW()],
            ['idCivilStatus' => 5, 'status' => 'En una relación', 'created_at' => NOW(), 'updated_at' => NOW()],
            ['idCivilStatus' => 6, 'status' => 'Prefiero no decirlo', 'created_at' => NOW(), 'updated_at' => NOW()],
        ]);
    }
}

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
            ['idCivilStatus' => 1, 'status' => 'Soltero', 'created_at' => NOW(), 'updated_at' => NOW()],
            ['idCivilStatus' => 2, 'status' => 'Casado', 'created_at' => NOW(), 'updated_at' => NOW()],
            ['idCivilStatus' => 3, 'status' => 'Divorciado', 'created_at' => NOW(), 'updated_at' => NOW()],
            ['idCivilStatus' => 4, 'status' => 'Viudo', 'created_at' => NOW(), 'updated_at' => NOW()],
            ['idCivilStatus' => 5, 'status' => 'En una relación', 'created_at' => NOW(), 'updated_at' => NOW()],
        ]);
    }
}

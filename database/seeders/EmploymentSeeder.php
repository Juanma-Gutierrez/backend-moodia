<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmploymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('employment')->insert([
            ['idEmployment' => 1, 'employment' => 'Estudiante', 'created_at' => NOW(), 'updated_at' => NOW()],
            ['idEmployment' => 2, 'employment' => 'Trabajador por cuenta propia', 'created_at' => NOW(), 'updated_at' => NOW()],
            ['idEmployment' => 3, 'employment' => 'Trabajador por cuenta ajena', 'created_at' => NOW(), 'updated_at' => NOW()],
            ['idEmployment' => 4, 'employment' => 'Desempleado', 'created_at' => NOW(), 'updated_at' => NOW()],
            ['idEmployment' => 5, 'employment' => 'Prefiero no decirlo', 'created_at' => NOW(), 'updated_at' => NOW()],
        ]);
    }
}

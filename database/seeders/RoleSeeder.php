<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('role')->insert([
            ['idRole' => 1, 'role' => 'Administrador', 'created_at' => NOW(), 'updated_at' => NOW()],
            ['idRole' => 2, 'role' => 'Usuario', 'created_at' => NOW(), 'updated_at' => NOW()],
        ]);
    }
}

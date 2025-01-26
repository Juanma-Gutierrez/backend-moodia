<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('admin123'),
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'name' => 'User',
                'email' => 'user@gmail.com',
                'password' => Hash::make('user123'),
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'name' => 'User2',
                'email' => 'user2@gmail.com',
                'password' => Hash::make('user123'),
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'name' => 'User3',
                'email' => 'user3@gmail.com',
                'password' => Hash::make('user123'),
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
        ]);
    }
}

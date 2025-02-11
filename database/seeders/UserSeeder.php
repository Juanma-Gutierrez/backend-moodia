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
        'name' => 'User3',
        'email' => 'user3@gmail.com',
        'password' => Hash::make('user123'),
        'created_at' => NOW(),
        'updated_at' => NOW(),
      ],
      [
        'name' => 'User4',
        'email' => 'user4@gmail.com',
        'password' => Hash::make('user123'),
        'created_at' => NOW(),
        'updated_at' => NOW(),
      ],
      [
        'name' => 'User5',
        'email' => 'user5@gmail.com',
        'password' => Hash::make('user123'),
        'created_at' => NOW(),
        'updated_at' => NOW(),
      ],
      [
        'name' => 'User6',
        'email' => 'user6@gmail.com',
        'password' => Hash::make('user123'),
        'created_at' => NOW(),
        'updated_at' => NOW(),
      ],
      [
        'name' => 'User7',
        'email' => 'user7@gmail.com',
        'password' => Hash::make('user123'),
        'created_at' => NOW(),
        'updated_at' => NOW(),
      ],
      [
        'name' => 'User8',
        'email' => 'user8@gmail.com',
        'password' => Hash::make('user123'),
        'created_at' => NOW(),
        'updated_at' => NOW(),
      ],
      [
        'name' => 'User9',
        'email' => 'user9@gmail.com',
        'password' => Hash::make('user123'),
        'created_at' => NOW(),
        'updated_at' => NOW(),
      ],
      [
        'name' => 'User10',
        'email' => 'user10@gmail.com',
        'password' => Hash::make('user123'),
        'created_at' => NOW(),
        'updated_at' => NOW(),
      ],
      [
        'name' => 'User11',
        'email' => 'user11@gmail.com',
        'password' => Hash::make('user123'),
        'created_at' => NOW(),
        'updated_at' => NOW(),
      ],
      [
        'name' => 'User12',
        'email' => 'user12@gmail.com',
        'password' => Hash::make('user123'),
        'created_at' => NOW(),
        'updated_at' => NOW(),
      ],
      [
        'name' => 'User13',
        'email' => 'user13@gmail.com',
        'password' => Hash::make('user123'),
        'created_at' => NOW(),
        'updated_at' => NOW(),
      ],
      [
        'name' => 'User14',
        'email' => 'user14@gmail.com',
        'password' => Hash::make('user123'),
        'created_at' => NOW(),
        'updated_at' => NOW(),
      ],
      [
        'name' => 'User15',
        'email' => 'user15@gmail.com',
        'password' => Hash::make('user123'),
        'created_at' => NOW(),
        'updated_at' => NOW(),
      ],
      [
        'name' => 'User16',
        'email' => 'user16@gmail.com',
        'password' => Hash::make('user123'),
        'created_at' => NOW(),
        'updated_at' => NOW(),
      ],
      [
        'name' => 'User17',
        'email' => 'user17@gmail.com',
        'password' => Hash::make('user123'),
        'created_at' => NOW(),
        'updated_at' => NOW(),
      ],
      [
        'name' => 'User18',
        'email' => 'user18@gmail.com',
        'password' => Hash::make('user123'),
        'created_at' => NOW(),
        'updated_at' => NOW(),
      ],
      [
        'name' => 'User19',
        'email' => 'user19@gmail.com',
        'password' => Hash::make('user123'),
        'created_at' => NOW(),
        'updated_at' => NOW(),
      ],
      [
        'name' => 'User20',
        'email' => 'user20@gmail.com',
        'password' => Hash::make('user123'),
        'created_at' => NOW(),
        'updated_at' => NOW(),
      ],
      [
        'name' => 'User21',
        'email' => 'user21@gmail.com',
        'password' => Hash::make('user123'),
        'created_at' => NOW(),
        'updated_at' => NOW(),
      ],
      [
        'name' => 'User22',
        'email' => 'user22@gmail.com',
        'password' => Hash::make('user123'),
        'created_at' => NOW(),
        'updated_at' => NOW(),
      ],
      [
        'name' => 'User23',
        'email' => 'user23@gmail.com',
        'password' => Hash::make('user123'),
        'created_at' => NOW(),
        'updated_at' => NOW(),
      ],
      [
        'name' => 'User24',
        'email' => 'user24@gmail.com',
        'password' => Hash::make('user123'),
        'created_at' => NOW(),
        'updated_at' => NOW(),
      ],
      [
        'name' => 'User25',
        'email' => 'user25@gmail.com',
        'password' => Hash::make('user123'),
        'created_at' => NOW(),
        'updated_at' => NOW(),
      ],
      [
        'name' => 'User26',
        'email' => 'user26@gmail.com',
        'password' => Hash::make('user123'),
        'created_at' => NOW(),
        'updated_at' => NOW(),
      ],
      [
        'name' => 'User27',
        'email' => 'user27@gmail.com',
        'password' => Hash::make('user123'),
        'created_at' => NOW(),
        'updated_at' => NOW(),
      ],
      [
        'name' => 'User28',
        'email' => 'user28@gmail.com',
        'password' => Hash::make('user123'),
        'created_at' => NOW(),
        'updated_at' => NOW(),
      ],
      [
        'name' => 'User29',
        'email' => 'user29@gmail.com',
        'password' => Hash::make('user123'),
        'created_at' => NOW(),
        'updated_at' => NOW(),
      ],
      [
        'name' => 'User30',
        'email' => 'user30@gmail.com',
        'password' => Hash::make('user123'),
        'created_at' => NOW(),
        'updated_at' => NOW(),
      ]
    ]);
  }
}

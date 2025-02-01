<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        $this->call([
            EmploymentSeeder::class,
            RoleSeeder::class,
            GenreSeeder::class,
            CivilStatusSeeder::class,
            CategorySeeder::class,
            UserSeeder::class,
            ExtendedUserSeeder::class,
            PostSeeder::class,
            InspiringPhraseSeeder::class,
        ]);
    }
}

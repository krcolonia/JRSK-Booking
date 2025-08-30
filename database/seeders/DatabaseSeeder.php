<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Userrole;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Database\Seeders\UserSeeder;
use Database\Seeders\UserroleSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        UserSeeder::class;
		UserroleSeeder::class;
    }
}

<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Userrole;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
			UserroleSeeder::class,
			UserSeeder::class,
			BookingStatusSeeder::class,
			RoomStatusSeeder::class,
		]);
    }
}

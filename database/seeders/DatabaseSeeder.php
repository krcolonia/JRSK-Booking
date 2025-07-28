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
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

		Userrole::factory()->create(
			['name' => 'Admin'],
			['name' => 'Staff'],
			['name' => 'User'],
		);
    }
}

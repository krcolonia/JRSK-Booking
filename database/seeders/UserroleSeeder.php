<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Userrole;

class UserroleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Userrole::create(
			['name' => 'Admin']
		);

		Userrole::create(
			['name' => 'Staff']
		);

		Userrole::create(
			['name' => 'Guest']
		);
    }
}

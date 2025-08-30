<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

Use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
			'firstName' => 'JRSK',
			'lastName' => 'Admin 1',
			'email' => 'jrsk@gmail.com',
			'password' => Hash::make('jrsk_admin'), // ? only for testing purposes, remove if releasing to public
			'userrole_id' => 1,
		]);
    }
}

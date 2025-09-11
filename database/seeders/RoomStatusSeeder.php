<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\RoomStatus;

class RoomStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        RoomStatus::create(
			['roomStatus' => 'Available']
		);
		
		RoomStatus::create(
			['roomStatus' => 'Booked']
		);
    }
}

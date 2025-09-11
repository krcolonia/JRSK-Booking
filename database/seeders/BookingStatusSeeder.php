<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\BookingStatus;

class BookingStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BookingStatus::create(
			['bookingStatus' => 'Booked']
		);
        BookingStatus::create(
			['bookingStatus' => 'Checked-in']
		);
        BookingStatus::create(
			['bookingStatus' => 'Checked-out']
		);
    }
}

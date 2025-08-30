<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
			$table->date('bookingDate');
			$table->date('checkinDate');
			$table->date('checkoutDate');
			$table->integer('numNights');
			$table->integer('numAdults');
			$table->integer('numChildren');
            $table->timestamps(); 
        });

		Schema::create('bookingStatus', function($table) {
			$table->id();
			$table->string('bookingStatus');
		});

		Schema::table('bookings', function($table) {
			$table->foreignId('guestId')->constrained('users')->onDelete('cascade');
			$table->foreignId('bookingStatusId')->constrained('bookingStatus')->onDelete('cascade');
		});
    }

    
    public function down(): void
    {
        Schema::dropIfExists('bookings');
        Schema::dropIfExists('bookingStatus');
    }
};

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

		Schema::create('bookingStatuses', function($table) {
			$table->id();
			$table->string('bookingStatus');
		});

		Schema::create('bookingDetails', function($table) {
			$table->id();
		});

		Schema::table('bookings', function($table) {
			$table->foreignId('guestId')->constrained('users')->onDelete('cascade');
			$table->foreignId('bookingDetailsId')->constrained('bookingDetails')->onDelete('cascade');
			$table->foreignId('bookingStatusId')->constrained('bookingStatuses')->onDelete('cascade');
		});
    }

    
    public function down(): void
    {
        Schema::dropIfExists('bookings');
        Schema::dropIfExists('bookingStatuses');
		Schema::dropIfExists('bookingDetails');
    }
};

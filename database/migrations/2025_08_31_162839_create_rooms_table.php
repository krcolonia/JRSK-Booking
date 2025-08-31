<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->string('roomNumber');
        });

		Schema::create('roomType', function($table) {
			$table->id();
			$table->string('roomType');
			$table->integer('roomCapacity');
			$table->double('roomRate');
		});

		Schema::create('roomStatus', function($table) {
			$table->id();
			$table->string('roomStatus');
		});

		Schema::table('rooms', function($table) {
			$table->foreignId('roomTypeId')->constrained('roomType')->onDelete('cascade');
			$table->foreignId('roomStatusId')->constrained('roomStatus')->onDelete('cascade');
		});
		
		Schema::table('bookingDetails', function($table) {
			$table->foreignId('roomId')->constrained('rooms')->onDelete('cascade');
			$table->foreignId('roomTypeId')->constrained('roomType')->onDelete('cascade');
		});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rooms');
    }
};

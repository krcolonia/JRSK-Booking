<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BookingStatus extends Model
{
	protected $table = 'bookingStatuses';

    public $timestamps = false;

	protected $primaryKey = 'bookingStatusId';

	protected $fillable = [
		'bookingStatus'
	];

	public function bookings() {
		return $this->hasMany(Booking::class, 'bookingStatusId');
	}
}

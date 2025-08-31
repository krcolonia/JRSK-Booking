<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    /** @use HasFactory<\Database\Factories\BookingsFactory> */
    use HasFactory;

	protected $fillable = [
		'guestId',
		'bookingDate',
		'checkinDate',
		'checkoutDate',
		'numNights',
		'numAdults',
		'numChildren',
		'bookingStatusId',
	];

	public function guest() {
		return $this->belongsTo(User::class, 'guestId');
	}

	public function status() {
		return $this->belongsTo(BookingStatus::class ,'bookingStatusId');
	}

	public function detail() {
		return $this->hasMany(BookingDetail::class, 'bookingDetailsId');
	}
}

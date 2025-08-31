<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BookingDetail extends Model
{
    use HasFactory;

	public $timestamps = false;

	protected $fillable = [
		'roomId',
		'roomTypeId',
	];

	public function room() {
		return $this->hasOne(Room::class, 'roomId');
	}

	public function type() {
		return $this->hasOne(RoomType::class, 'roomTypeId');
	}

	public function booking() {
		return $this->belongsTo(Booking::class, 'bookingDetailsId');
	}
}

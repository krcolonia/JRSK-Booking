<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class RoomType extends Model
{
	use HasFactory;

	protected $table = 'roomTypes';

	public $timestamps = false;

	protected $fillable = [
		'roomType',
		'roomCapacity',
		'roomRate',
	];

	public function rooms() {
		return $this->hasMany(Room::class, 'roomTypeId');
	}

	public function bookingDetail() {
		return $this->belongsTo(BookingDetail::class, 'roomTypeId');
	}

}

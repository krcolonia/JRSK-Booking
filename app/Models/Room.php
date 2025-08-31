<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use App\Models\BookingDetail;
use App\Models\RoomType;
use App\Models\RoomStatus;

class Room extends Model
{
    use HasFactory;

	protected $fillable = [
		'roomTypeId',
		'roomNumber',
		'roomStatusId',
	];

	public function type() {
		return $this->hasOne(RoomType::class, 'roomTypeId');
	}

	public function status(){
		return $this->hasOne(RoomStatus::class, 'roomStatusId');
	}

	public function bookingDetail() {
		return $this->belongsTo(BookingDetail::class, 'roomId');
	}

}

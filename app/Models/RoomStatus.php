<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class RoomStatus extends Model
{
    use HasFactory;

	protected $table = 'roomStatuses';

	public $timestamps = false;

	protected $fillable = [
		'roomStatus',
	];

	public function rooms() {
		return $this->hasMany(Room::class, 'roomStatusId');
	}
}

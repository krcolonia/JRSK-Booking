<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Userrole extends Model
{
    protected $primaryKey = 'id';

	protected $fillable = [
        'firstName',
    ];

	public function users(){
		return $this->hasMany(User::class, 'userrole_id');
	}
}

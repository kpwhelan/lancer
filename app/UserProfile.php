<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{

	protected $fillable = [
		'name', 'specialty', 
	];

	public function user() {
		return $this->belongsTo(User::class);
	}
    
}

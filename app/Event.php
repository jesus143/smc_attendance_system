<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
	protected $table = 'events'; 
	protected $fillable = ['name', 'description', 'date_time_start', 'date_time_end'];
 
	public function attendance()
	{
		return $this->hasMany('App\Attendance');
	} 
}

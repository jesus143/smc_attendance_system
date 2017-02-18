<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
	protected $table = 'events';


	protected $fillable = [
		'name',
		'venue',
		'priest_name',
		'description',
		'sponsor_personnels',
		'sponsor_students',
		'sponsor_collge',
		'sponsor_year',
		'participant_collge',
		'participant_religion',
		'participant_year',
		'date_time_start',
		'date_time_end',
	]; 

	public function student_events()
	{
		return $this->hasMany('App\StudentEvent'); 
	}

    public static function getAllOrderByDesc() {
		return self::orderBy('id', 'desc')->get();
    }

	public function attendance()
	{
		return $this->hasMany('App\Attendance');
	} 
}

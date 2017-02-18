<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentEvent extends Model
{
    protected $table = 'student_events';
    protected $fillable = [
	    'student_id',
		'event_id',
		'status_in',
		'status_out' 
    ]; 
}

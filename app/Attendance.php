<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
  	protected $table = 'attendances';
  	protected $fillable = ['user_id', 'event_id'];
}

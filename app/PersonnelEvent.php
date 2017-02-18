<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PersonnelEvent extends Model
{
    protected $table = 'personnel_events';
    protected $fillable = [
        'personnel_id',
        'event_id',
        'status_in',
        'status_out'
    ];
}

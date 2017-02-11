<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personnel extends Model
{
    protected $table = 'personnels'; 

    protected $fillable = [
    	'first_name',
		'last_name',
		'mobile_number',
		'position',
		'department',
		'gender' 
    ]; 

  	public static function getNamesByIdList($idList) {  
  		$listNames = '';
        $idListArr = explode(',', $idList); 
        foreach ($idListArr as $key => $personnelId) {
             $personnel = self::find($personnelId); 
             $listNames .= $personnel->first_name . ' ' . $personnel->last_name . ', '; 
        } 
        return $listNames;
    }

    public static function getAllOrderByDesc() {
		return Personnel::orderBy('id', 'desc')->get();
    }
} 
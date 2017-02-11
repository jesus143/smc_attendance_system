<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'students';   
    protected $fillable = [
    	'id_number',
		'first_name',
		'last_name',
		'mobile_number',
		'religion',
		'year_level',
		'course',
		'gender',
		'bio',
    ]; 
	public static function getAllOrderByDesc() {
		return SELF::orderBy('id', 'desc')->get();
    } 
    
  	public static function getNamesByIdList($idList) {  
  		$listNames = '';
        $idListArr = explode(',', $idList); 
        foreach ($idListArr as $key => $personnelId) {
             $personnel = self::find($personnelId); 
             $listNames .= $personnel->first_name . ' ' . $personnel->last_name . ', '; 
        } 
        return $listNames;
    }
}

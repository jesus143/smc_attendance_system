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

        if(count( $idListArr ) > 0 and  $idListArr[0] != null) {  
            foreach ($idListArr as $key => $personnelId) {
                 $personnel = self::find($personnelId); 
                 $listNames .= $personnel->first_name . ' ' . $personnel->last_name . ', '; 
            } 
            return $listNames;
        }
    }


    public static function getStudentEventMobileNumbers($student_colleges, $student_year) 
    { 
        $student_colleges = str_replace(' ', '', $student_colleges); 
        $student_year     = $student_year;  
        $student_colleges = explode(',', $student_colleges);    
        $student_year     = explode(',', $student_year);        
        $students  = Student::whereIn('year_level', $student_year)->get(); 

        $students = $students->toArray(); 
        $collection = collect( $students );  
        $filtered = $collection->whereIn('course', $student_colleges);    
 
        foreach ($filtered as $student) {
            $numbers[] = $student['mobile_number'];
        } 
        return (!empty($numbers)) ? $numbers : null; 
    }

    public static function listIdToArray($listId) {
        $listIdArr = []; 
        $listId = str_replace(" ", "", $listId); 
        $listIdArr = explode(",", $listId); 
        return $listIdArr; 
    }
    public static function fullNameByStudentId($id) {
        $student = self::find($id);
        return $student->first_name . ' ' . $student->last_name;
    }
}

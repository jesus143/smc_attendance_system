<?php

namespace App;
use App\Personnel;
use Illuminate\Database\Eloquent\Model;
use DB;

class Personnel extends Model
{
    protected $table = 'personnels'; 

    protected $fillable = [
    	'id_number',
    	'first_name',
		'last_name',
		'religion',
		'bio',
		'mobile_number',
		'position',
		'department',
		'gender' 
    ]; 

  	public static function getNamesByIdList($idList) {  
  		  $listNames = '';
        $idList = str_replace(" ", '', $idList); 
        $idListArr = explode(',', $idList);  
        if( count($idListArr) > 0 and $idListArr[0] != null ) {  
          foreach ($idListArr as $key => $personnelId) {
               $personnel = self::find($personnelId); 
               $listNames .= $personnel->first_name . ' ' . $personnel->last_name . ', '; 
          } 
          return $listNames;
        }
    }

    public static function getAllOrderByDesc() {
		  return Personnel::orderBy('id', 'desc')->get();
    }

    public static function composeNumberAsArray($sponsor_personnels) 
    { 
      $personnels = $sponsor_personnels;    
      $personnelArray = explode(',', $personnels);  

      print_r(   $personnelArray )  ; 
    
      if(count($personnelArray) > 0 and $personnelArray[0] != null) {  
        $numbers = [];  
        foreach($personnelArray as $index => $personnelId) { 
          $personnelInfo = Personnel::find($personnelId); 
          $numbers[] = $personnelInfo->mobile_number; 
        } 
        return $numbers;
      }
    }


    public static function getPersonnelNumberUnderCollege($participant_college)
    {

        $pcollege = str_replace(" ", "", $participant_college);
        $pcollege = explode(',' , $pcollege);

        $personnels = DB::table('personnels')->whereIn('department', $pcollege)->get();

        $mobileNumber = [];
        foreach($personnels as $personnel):
            $mobileNumber[] = $personnel->mobile_number;
        endforeach;

        return $mobileNumber;
    }

    public static function listIdToArray($listId) {
        $listIdArr = []; 
        $listId = str_replace(" ", "", $listId); 
        $listIdArr = explode(",", $listId); 
        return $listIdArr; 
    }
} 
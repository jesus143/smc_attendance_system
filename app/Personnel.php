<?php

namespace App;
use App\Personnel;
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

    public static function listIdToArray($listId) {
        $listIdArr = []; 
        $listId = str_replace(" ", "", $listId); 
        $listIdArr = explode(",", $listId); 
        return $listIdArr; 
    }
} 
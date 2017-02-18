<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\Sms;
use App\Student;

class PagesController extends Controller
{
	public function Dashboard() 
	{  
		return view("pages/admin/dashboard"); 
	}
	public function Sms() 
	{ 
		// get all events  
		 $events = Event::orderBy('id', 'desc')->get(); 
		return view("pages/admin/sms", compact('events')); 
	}
	public function Attendance() 
	{
		$events = Event::orderBy('id', 'desc')->get(); 
		return view("pages/admin/attendance", compact('events')); 
	} 
	public function AttendanceEvent($eventId) 
	{
		// print "event details"
		// print " attendace event " . $eventId;
		// return view("pages/admin/attendance-event");
	}  

	public function studentProfile()
	{ 
		   $studentInfo = session('authStudent');   
		   $studentInfo = Student::find($studentInfo->id);
		   $id  = $studentInfo->id;
			// dd($studentInfo); 
 			$studentName = []; 
            $studentName['Name'] = $studentInfo->first_name . ' ' . $studentInfo->last_name;
            $studentName['Course'] = $studentInfo->course;
            $studentName['Id Number'] = $studentInfo->id_number;
            $studentName['Mobile Number'] = $studentInfo->mobile_number;
            $studentName['Religion Specification'] = $studentInfo->religion;
            $studentName['Religion Description'] = $studentInfo->bio; 
            $studentName['Religion Description'] = $studentInfo->bio; 
            $studentName['Year Level'] = $studentInfo->year_level; 

            // dd($authStudent);  
		return view("pages/student-profile-home", compact('studentName', 'id'));
	} 



}

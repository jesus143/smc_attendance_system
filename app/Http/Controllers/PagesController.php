<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;

class PagesController extends Controller
{
	public function Dashboard() 
	{  
		return view("pages/admin/dashboard"); 
	}
	public function Sms() 
	{
		return view("pages/admin/sms"); 
	}
	public function Attendance() 
	{
		$events = Event::all(); 
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
 
		$authStudent = session('authStudent');  
		$studentInfo = [
			'id_number' => $authStudent->id_number,
			'first_name' => $authStudent->first_name,
			'last_name' => $authStudent->last_name,
			'mobile_number' => $authStudent->mobile_number,
			'religion' => $authStudent->religion,
			'year_level' => $authStudent->year_level,
			'course' => $authStudent->course,
			'gender' => $authStudent->gender,
			'bio' => $authStudent->bio 
		];   



		return view("pages/student-profile-home", compact('studentInfo'));
	} 



}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
		return view("pages/admin/attendance"); 
	} 
	public function AttendanceEvent($eventId) 
	{ 

		// print " attendace event " . $eventId;
		return view("pages/admin/attendance-event"); 
	}  
}

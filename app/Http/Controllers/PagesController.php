<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\Sms;
use App\Student;
use DB;

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

		// profile
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

		// get upcoming events
		$upComingEvents = Event::where('date_time_start', '>=', date('Y-m-d H:i:s') )
			->where('participant_collge', 'like', '%' .  $studentInfo->course  . '%' )
			->where('participant_year', 'like', '%' . $studentInfo->year_level . '%' )
			->get();

		// get student attendance
		$userEvents= DB::table('student_events')
				->join('events', 'student_events.event_id', '=', 'events.id')
				->select('student_events.*', 'events.*')
				->where('student_events.student_id', $studentInfo->id)
				->get();



		return view("pages/student-profile-home", compact('studentName', 'id', 'upComingEvents', 'userEvents'));
	} 



}

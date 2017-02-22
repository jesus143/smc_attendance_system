<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\Personnel;
use App\StudentEvent;
use DB;

class AttendanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {            
        // student attendance
        $studentEvents = DB::table('student_events')
            ->join('students', 'student_events.student_id', '=', 'students.id')  
            ->where('student_events.event_id', $id)
            ->select('students.*', 'student_events.*' )
            ->get();

        // personnel attendance
         $personnelEvents = DB::table('personnel_events')
            ->join('personnels', 'personnel_events.personnel_id', '=', 'personnels.id')
            ->where('personnel_events.event_id', $id)
            ->select('personnels.*', 'personnel_events.*' )
            ->get();

 
        $event = Event::where('id', $id)->get(); 
        return view("pages/admin/attendance/attendance-detail", compact('event', 'id', 'studentEvents', 'personnelEvents'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        // delete student
        $studentEvent = StudentEvent::find($id); 
        $studentEvent->delete();
        return redirect()->back()->with('delete_student_attendance_status', 'Successfully deleted attendance');

    }


    public function printStudent($event_id) {

        $eventDetails = DB::table('events')
            ->join('student_events', 'events.id', '=', 'student_events.event_id')
            ->join('students', 'students.id', '=', 'student_events.student_id')
            ->select('student_events.*', 'events.*', 'students.*')
            ->where('events.id', $event_id)
            ->get();


        return view('pages/admin/attendance/attendance-print-student', compact('eventDetails'));
    }

    public function printPersonnel($event_id) {

        $eventDetails = DB::table('events')
            ->join('personnel_events', 'events.id', '=', 'personnel_events.event_id')
            ->join('personnels', 'personnels.id', '=', 'personnel_events.personnel_id')
            ->select('personnel_events.*', 'events.*', 'personnels.*')
            ->where('events.id', $event_id)
            ->get();
        return view('pages/admin/attendance/attendance-print-personnel', compact('eventDetails'));
    }

    public function printSpecificPersonnelAttendance($personnel_id)
    {


        // get personnel attendance
        $userEvents= DB::table('personnel_events')
            ->join('events', 'personnel_events.event_id', '=', 'events.id')
            ->join('personnels', 'personnels.id', '=', 'personnel_events.personnel_id')
            ->select('personnel_events.*', 'events.*', 'personnels.*')
            ->where('personnel_events.personnel_id', $personnel_id)
            ->get();

//        dd($userEvents);
        return view("pages/admin/attendance/attendance-print-specific-personnel", compact('userEvents' ));


    }


}
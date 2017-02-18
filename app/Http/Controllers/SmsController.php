<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\Personnel;
use App\Student; 
use App\Sms; 
// use App\Classes\Test; 

class SmsController extends Controller
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
        $id = $request->get('send_to');     
        $message         = $request->get('message');     
        $event           = Event::find($id);    
        
        $personelNumbers = Personnel::composeNumberAsArray($event->sponsor_personnels);     
        $studentNumbers  = Student::getStudentEventMobileNumbers($event->participant_collge, $event->participant_year);  
   
 
        if(!empty($personelNumbers) and !empty($studentNumbers)) {  
            $arrayNumbers = array_merge($personelNumbers, $studentNumbers);
        } else if(!empty($personelNumbers)) { 
            $arrayNumbers = $personelNumbers;
        } else if(!empty($studentNumbers)) {  
            $arrayNumbers = $studentNumbers;
        } else {
            $arrayNumbers = [''];
        } 
        // $arrayNumbers    = Sms::mergeNumbers($student, $personnel);  
        // print_r( $personelNumbers); 
        // print_r( $studentNumbers); 
        // exit;  
        // $arrayNumbers [] =  '+639069262984'; 
        // $message = "test"; 
        // print "<pre>";
        // print_r($arrayNumbers);
        // exit; 
        $tatus = Sms::sendSms($arrayNumbers, env('SMS_DEVICE_ID'), $message);  
        // print_r($tatus);
        // exit; 
       return redirect()->back()->with('status', 'message is comming to students and faculty soon..');  
    } 

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
    }
}

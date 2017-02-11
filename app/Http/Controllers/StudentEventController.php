<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\StudentEvent;
use App\Student;
use App\Event;
class StudentEventController extends Controller
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

         $validator = Validator::make($request->all(), [
            'student_id' => 'required',
            'status' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()
                        ->back()
                        ->withErrors($validator)
                        ->withInput();
        } 

        $data = $request->except('_token');   
        $studentInfo = Student::where('id_number', $request->get('student_id'))->first();   




            $eventDetails = Event::find( $request->get('event_id')); 

            // dd($studentInfo->course); 
                // dd($studentInfo->course); 
            





        // check if the student is exist
        if(!empty($studentInfo)) { 

            // check college   
                $inCollege = strpos($eventDetails->participant_collge, $studentInfo->course); 
                if($inCollege > -1 ) {
                } else { 
                    return redirect()->back()->with("message", 'Your college is ' . $studentInfo->course . ' and but only ' . $eventDetails->participant_collge . ' is allowed for this event');
                }

                // PRINT  " in college " . $inCollege . " COLLEGE " . $inCollege . ' event course allowed ' . $eventDetails->participant_collge . ",  studen course" .  $studentInfo->course; 
                // exit;  
                 
            // check religion
               $inReligion = strpos($eventDetails->participant_religion, $studentInfo->religion); 
                 if($inReligion > -1 ) {
                } else { 
                    return redirect()->back()->with("message", 'Your religion is ' . $studentInfo->religion . ' and but only ' . $eventDetails->participant_religion . ' is allowed for this event');
                }              

            // participant year
                $inLevel= strpos($eventDetails->participant_year, $studentInfo->year_level); 

                $participant_year_arr = explode(',', $eventDetails->participant_year);


                // PRINT " IN LEVEL $inLevel ==  $eventDetails->participant_year, $studentInfo->year_level ";  
                // EXIT; 
                
                if(in_array($studentInfo->year_level, $participant_year_arr)) {
                } else { 
                    return redirect()->back()->with("message", 'Your year level is ' . $studentInfo->year_level . ' and but only ' . $eventDetails->participant_year . ' is allowed for this event');
                }         





            $isExist = StudentEvent::where('event_id', $request->get('event_id'))->where('student_id', $studentInfo->id)->where('status', $request->get('status'))->count(); 
            $data['student_id'] = $studentInfo->id;
        } else {
            return redirect()->back()->with("message", 'No student found for the student id number');
        }
           
        // print "total " .  $isExist;
        if(!$isExist) {   
            StudentEvent::create($data);   
        }     else { 
            return redirect()->back()->with("message", 'Already signed in');
        }
         
        if($request->get('status') == 'in') { 
            return redirect()->back()->with("message", 'Successfully signed in');
        } else { 
            return redirect()->back()->with("message", 'Successfully signed out');
        }
        

        // dd($request->all());

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

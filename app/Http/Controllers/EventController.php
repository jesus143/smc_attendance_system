<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
 use App\Personnel;
 use App\Student;
 use App\Event;

class EventController extends Controller
{ 

    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $personnels = Personnel::getAllOrderByDesc();  
        $students   = Student::getAllOrderByDesc();
        $events   = Event::getAllOrderByDesc();

        return view('pages/admin/event-home', compact('personnels', 'students', 'events')); 
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
 
            $data = $request->except('_token');
          
            $newDate = []; 
            foreach ($data as $key => $value) {  
                if(is_array($value))  {
                    $value = implode(', ', $value);
                }
                $newData[$key] = $value; 
            } 
            Event::create($newData); 

            return redirect()
                    ->back()
                    ->with('status', 'Successfully added new event!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

         $personnels  = Personnel::getAllOrderByDesc();  
        $students     = Student::getAllOrderByDesc();
        $events       = Event::getAllOrderByDesc();
        $eventDetails = Event::find($id);

        return view('pages/admin/event-home', compact('personnels', 'students', 'events', 'eventDetails', 'id'));  
        // return "show specific event";
        // return view('pages/')
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view("pages/admin/event-details");
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
        //         dd($request->all());
        if(empty($request->get('date_time_start')) or  empty($request->get('date_time_end'))) {
            return redirect()
                ->back()
                ->with('status', 'Ohps, please add your event start and end time');
        }
         
        $data = $request->except('_token');
      
        $newDate = [];

        foreach ($data as $key => $value) {  
            if(is_array($value))  {
                $value = implode(', ', $value);
            }
            $newData[$key] = $value; 
        }

        Event::find($id)->update($newData); 

        return redirect()
                ->back()
                ->with('status', 'Successfully updated event!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Event::find($id)->delete();
        return redirect()->back()->with('status', 'Successfully deleted!');
    }




}

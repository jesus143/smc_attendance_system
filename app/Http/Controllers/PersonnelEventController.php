<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\PersonnelEvent;
use App\Personnel;
use App\Event;

class PersonnelEventController extends Controller
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

        //        $validator = Validator::make($request->all(), [
        //            'personnel_id' => 'required',
        //            'status' => 'required',
        //        ]);
        //
        //        if ($validator->fails()) {
        //            return redirect()
        //                ->back()
        //                ->withErrors($validator)
        //                ->withInput();
        //        }


        $data = $request->except('_token');
        if($request->get('status') == 'in') {
            $data['status_in'] = 'in';
        } else {
            $data['status_out'] = 'out';
        }
        unset($data['status']);

        $personnelInfo = Personnel::where('id_number', $request->get('personnel_id'))->first();

        $eventDetails = Event::find( $request->get('event_id'));

//        dd($personnelInfo);
        // check if the student is exist
        if(!empty($personnelInfo)) {



            print_r($eventDetails->sponsor_personnels);
            print " personnel " .  $personnelInfo->id;



            $sponsorPersonnels = explode(',', $eventDetails->sponsor_personnels);


            print_r($sponsorPersonnels);
            // check college
            $inEvent = strpos($eventDetails->sponsor_personnels, $personnelInfo->id);



            if(!in_array($personnelInfo->id, $sponsorPersonnels)) {
                return redirect()->back()->with("message", "This personnel is not in the event");
            }


            $isExist = PersonnelEvent::where('event_id', $request->get('event_id'))->where('personnel_id', $personnelInfo->id)->count();
            $data['personnel_id'] = $personnelInfo->id;


        } else {
            return redirect()->back()->with("message", 'No Personnel found');
        }

        // print "total " .  $isExist;
        if(!$isExist) {
            print "insert ";
            PersonnelEvent::create($data);
        } else {
//            print "update " . $personnelInfo->id;
            PersonnelEvent::where('personnel_id',  $personnelInfo->id)
                ->update($data);
            // $studentEvent = StudentEvent::find($studentInfo->id);
            // $studentEvent->update($data);
        }

        if($request->get('status') == 'in') {
            return redirect()->back()->with("message", 'Personnel Successfully signed in');
        } else {
            return redirect()->back()->with("message", 'Personnel Successfully signed out');
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

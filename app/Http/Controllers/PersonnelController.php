<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Personnel;
use DB;

class PersonnelController extends Controller
{

    public function PostLogin(Request $request) {

        $idNumner = $request->get('id_number');
        $password = $request->get('password');
        $authPersonnel = Personnel::where('id_number',  $idNumner)->where('last_name', $password)->get()->first();

        if (!empty($authPersonnel)){

            session(['authPersonnel'=>$authPersonnel]);

            return redirect()->route('personnel.profile');

        } else  {
            session(['status' => 'Ophs, something wrong with personnel info! Please try again.']);
            return back();
        }
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $personnels = Personnel::orderBy('id', 'desc')->get(); 
        return view("pages/admin/personnel-home", compact('personnels')); 
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
        $inputs = $request->except('_token');  
        // dd($inputs);
        if(Personnel::create($inputs)) {
            return redirect()->back()->with('status1', 'Successfully added new personnel!');
        } else {
            return redirect()->back()->with('status1', 'Failed to add new personnel!');
        } 
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
        $data = $request->except(['_method', '_token']);
        // dd($data);
        Personnel::Find($id)->update($data);
        return redirect()->back()->with('status', 'Successfully updated!');
    }
    public function LogOut()
    {
        print " logout personnel information";
        session(['authPersonnel'=>'']);
        session(['status'=>'']);

        return redirect(url('home/index.php'));
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        print " id " . $id ;
        Personnel::find($id)->delete();
        return redirect()->back()->with('status', 'Successfully deleted!');
    }

    public function searchDetail($id)
    {
        $personnelEvents= DB::table('personnel_events')
            ->join('events', 'personnel_events.event_id', '=', 'events.id')
            ->select('personnel_events.*', 'events.*')
            ->where('personnel_events.personnel_id', $id)
            ->get();

        return view('pages/admin/personnel/personnel-search-detail', compact('personnelEvents'));
    }
}

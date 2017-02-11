<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Personnel; 

class PersonnelController extends Controller
{
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
        print " id " . $id ;
        Personnel::find($id)->delete();
        return redirect()->back()->with('status', 'Successfully deleted!');
    }
}

<?php
 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StudentLoginRequest;
use App\Student; 
use App\Http\Requests\StudentStoreRequest;

class StudentController extends Controller
{  
    public function PostLogin(Request $request) {     
        // dd($request->all());
        $idNumner = $request->get('id_number'); 
        $password = $request->get('password');     
        $authStudent = Student::where('id_number',  $idNumner)->where('last_name', $password)->get()->first(); 
        session(['authStudent'=>$authStudent]);   
        if (!empty($authStudent)){
            return redirect()->route('student.profile'); 
        } else  { 
            session(['status' => 'Ophs, something wrong! Please try again.']);
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

        $students = Student::all();

        return view("pages/admin/student-home", compact('students'));
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
    public function store(StudentStoreRequest $request)
    {

        $data = $request->except('_token'); 
        // dd($data); 
        Student::create($data); 
        return redirect()->back()->with('status', 'Successfully added new student!')->withInput(); 
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        return 'show student';
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
        return 'edit student';
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

        return 'delete student';
        //
    }
    public function LogOut()
    {
        print " logout student information";
        session(['authStudent'=>'']);
        session(['status'=>'']);



        return redirect(url('home/index.php'));
    }
}

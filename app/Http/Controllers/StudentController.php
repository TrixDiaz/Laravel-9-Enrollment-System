<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\Students;
use App\Models\Faculties;
use App\Models\GradeAndSection;
use App\Models\TrackAndStrand;
use App\Models\User;
class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $fac = faculties::all();
        $stud = students::all();
        $tands = trackandstrand::all();
        $gandsec = gradeandsection::all();
        return view('admin.enroll.student',['students'=>$stud],['trackandstrand'=>$tands]+['gradeandsections'=>$gandsec]);
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $students = student::all();
        // return view('ad')
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $this->validate($request,[

             'studentID' => 'required',
             'firstName' => 'required',
             'lastName' => 'required',
            //  'middleName' => 'required',
             'gender' => 'required',
             'dateOfBirth' => 'required',
             'address' => 'required',
             'track' => 'required',
            //  'section' => 'required',
             'strandID' => 'required',
             'sectionID' => 'required',
             'schoolLastAttended' => 'required',
             'email' => 'required',
             'password' => 'required',
        
         ]);
         $student = new students;
                  
         $student->studentID = $request->input('studentID');
         $student->firstName = $request->input('firstName');
         $student->lastName = $request->input('lastName');
         $student->middleName = $request->input('middleName');
         $student->gender = $request->input('gender');
         $student->dateOfBirth = $request->input('dateOfBirth');
         $student->address = $request->input('address');
         $student->track = $request->input('track');
        //  $student->section = $request->input('section');
         $student->strandID = $request->input('strandID');
         $student->sectionID = $request->input('sectionID');
         $student->schoolLastAttended = $request->input('schoolLastAttended');
        //  $student->schoolLastAttendedAddress = $request->input('schoolLastAttendedAddress');
         $student->email = $request->input('email');
         $student->password = $request->input('password');

         $student->save();
        //  $student = Classes::create($this);
         return redirect('/admin/enroll')->with('Success', 'Data Saved');
    
         
        }

        // public function process(Request $request){
        //     $student = $request->validate([
        //         "email"=>['required','email'],
        //         "password" => 'required'
        //     ]);
    
        //     if(auth()->attempt($student)){
        //         $request->session()->regenerate();
        //         return redirect('/dashboard')->with('message','Welcome');
        //     }else{
        //         return redirect('/dashboard')->with('message','login failed');        
        //     }
        // }

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
        $this->validate($request,[

            'firstName' => 'required',
            'lastName' => 'required',
            'gender' => 'required',
            'dateOfBirth' => 'required',
            'address' => 'required',
            'track' => 'required',
            'strandID' => 'required',
            'sectionID' => 'required',
            'schoolLastAttended' => 'required',
            'email' => 'required',
            'password' => 'required',
            // 'schoolLastAttendedAddress' => 'required',
       
        ]);
        $student = students::find($id);

        // $student->studentID = $request->input('studentID');
        $student->firstName = $request->input('firstName');
        $student->lastName = $request->input('lastName');
        $student->middleName = $request->input('middleName');
        $student->gender = $request->input('gender');
        $student->dateOfBirth = $request->input('dateOfBirth');
        $student->address = $request->input('address');
        $student->track = $request->input('track');
        $student->strandID = $request->input('strandID');
        $student->sectionID = $request->input('sectionID');
        $student->schoolLastAttended = $request->input('schoolLastAttended');
        // $student->schoolLastAttendedAddress = $request->input('schoolLastAttendedAddress');
        $student->email = $request->input('email');
        $student->password = $request->input('password');
        $student->save();

        return redirect('/admin/enroll')->with('Success', 'Data Saved');

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

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Students;
use App\Models\Faculties;
use App\Models\GradeAndSection;
use App\Models\TrackAndStrand;
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
            //  'section' => 'required',
             'strandID' => 'required',
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
        //  $student->section = $request->input('section');
         $student->strandID = $request->input('strandID');
         $student->schoolLastAttended = $request->input('schoolLastAttended');
        //  $student->schoolLastAttendedAddress = $request->input('schoolLastAttendedAddress');
         $student->email = $request->input('email');
         $student->password = $request->input('password');

         $student->save();

         return redirect('/admin/enroll')->with('Success', 'Data Saved');
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
        $this->validate($request,[

            'firstName' => 'required',
            'lastName' => 'required',
            'gender' => 'required',
            'dateOfBirth' => 'required',
            'address' => 'required',
            // 'section' => 'required',
            'strandID' => 'required',
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
        $student->section = $request->input('section');
        $student->strandID = $request->input('strandID');
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

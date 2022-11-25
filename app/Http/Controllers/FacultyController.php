<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Faculties;
use App\Models\GradeAndSection;
use App\Models\Departments;


class FacultyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dep = departments::all();
        $gandsec = gradeandsection::all();
        $fac = faculties::all();

        // return DB::select('select * from grade_and_sections');
        return view('admin.faculty.faculty1',['faculties' => $fac],['gradeandsection' => $gandsec]+['departments' => $dep]);    
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
        $this->validate($request,[

            'facultyID' => 'required',
            'firstName' => 'required',
            'lastName' => 'required',
            'middleName' => 'required',
            'gender' => 'required',
            'username' => 'required',
            'password' => 'required',
            'department' => 'required',
            // 'section' => 'required',
        ]);

        $faculty = new faculties;

        $faculty->facultyID = $request->input('facultyID');
        $faculty->firstName = $request->input('firstName');
        $faculty->lastName = $request->input('lastName');
        $faculty->middleName = $request->input('middleName');
        $faculty->gender = $request->input('gender');
        $faculty->username = $request->input('username');
        $faculty->password = $request->input('password');
        $faculty->department = $request->input('department');
        // $faculty->section = $request->input('section');

        $faculty->save();

        return redirect('/admin/faculty')->with('Success', 'Data Saved');

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
        // $faculty = faculties::find($id);
        // $faculties = faculties::all();
        // return view('admin/faculty/faculty', ['faculties'=>$faculties,'faculty'=>$faculty]);
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
            
            // 'facultyID' => 'required',
            'firstName' => 'required',
            'lastName' => 'required',
            'middleName' => 'required',
            'gender' => 'required',
            'username' => 'required',
            'password' => 'required',
            'department' => 'required',
            // 'section' => 'required',
        ]);

        $faculty = faculties::find($id);

        // $faculty->facultyID = $request->input('facultyID');
        $faculty->firstName = $request->input('firstName');
        $faculty->lastName = $request->input('lastName');
        $faculty->middleName = $request->input('middleName');
        $faculty->gender = $request->input('gender');
        $faculty->username = $request->input('username');
        $faculty->password = $request->input('password');
        $faculty->department = $request->input('department');
        // $faculty->section = $request->input('section');

        $faculty->save();

        return redirect('/admin/faculty')->with('Success', 'Data Updated');

        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       
    }

    // public function facultyResult(){
    //     $gradeandsection = gradeandsection::all();
    //     $advisory = faculties::all();
    //     return view('admin.faculty.faculty1',['faculties' => $advisory],['gradeandsection' => $gradeandsection]);
    // }
}

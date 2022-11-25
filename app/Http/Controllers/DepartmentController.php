<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Departments;


class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departments = departments::all();
        return view('admin.departments.department')->with('departments', $departments);
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
            'departmentID' => 'required',
            'departmentName' => 'required',
            
        ]);

        $department = new departments;

        $department->departmentID = $request->input('departmentID');
        $department->departmentName = $request->input('departmentName');

        $department->save();
        return redirect('/admin/departments')->with('Success', 'Data Saved');
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
            'departmentID' => 'required',
            'departmentName' => 'required',
            
        ]);

        $department = departments::find($id);

        $department->departmentID = $request->input('departmentID');
        $department->departmentName = $request->input('departmentName');

        $department->save();
        return redirect('/admin/departments')->with('Success', 'Data Updated');
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

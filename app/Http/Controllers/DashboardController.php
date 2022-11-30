<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Departments;
use App\Models\Students;
use App\Models\GradeAndSection;
use App\Models\TrackAndStrand;
use App\Models\Faculties;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $dep = departments::count();
        // $stud = students::count();
        // $gandsec = gradeandsection::count();
        // $tands = trackandstrand::all();
        // $fac = faculties::count();

        return view('admin.admindashboard', compact('dep', 'stud', 'gandsec', 'tands','fac'));
        // return view('admin.admindashboard', ['departments'=>$dep],['students'=>$stud]+['gradeandsection'=>$gandsec]+['trackandstrand'=>$tands]+['faculties'=>$fac]);
    }

    // public function Department() {

    //     return view('admin.departments.department');

    // }

  
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
        //
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

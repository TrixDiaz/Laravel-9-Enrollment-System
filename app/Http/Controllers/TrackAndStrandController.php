<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TrackAndStrand;


class TrackAndStrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trackandstrands = trackandstrand::all();
        return view('admin.trackandstrand.trackandstrand')->with('trackandstrands', $trackandstrands);
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
            'track' => 'required',
            'strandID' => 'required',
            'strandName' => 'required',
        ]);

        $trackandstrand = new trackandstrand;

        $trackandstrand->track = $request->input('track');
        $trackandstrand->strandID = $request->input('strandID');
        $trackandstrand->strandName = $request->input('strandName');

        $trackandstrand->save();
        return redirect('/admin/trackandstrand')->with('Success', 'Data Saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
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

            'track' => 'required',
            'strandID' => 'required',
            'strandName' => 'required',
        ]);

        $trackandstrand = trackandstrand::find($id);

        $trackandstrand->track = $request->input('track');
        $trackandstrand->strandID = $request->input('strandID');
        $trackandstrand->strandName = $request->input('strandName');

        $trackandstrand->save();
        return redirect('/admin/trackandstrand')->with('Success', 'Data Updated');

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

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StudentProfile;
use DB;
class StudentProfileController extends Controller
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
        $studentProfile = new studentprofile;

        $studentProfile->photo = $request->input('photo');
        $studentProfile->firstName = $request->input('firstName');
        $studentProfile->lastName = $request->input('lastName');
        $studentProfile->middleName = $request->input('middleName');
        $studentProfile->dateOfBirth = $request->input('dateOfBirth');
        $studentProfile->age = $request->input('age');
        $studentProfile->placeOfBirth = $request->input('placeOfBirth');
        $studentProfile->mobileNumber = $request->input('mobileNumber');
        $studentProfile->telephoneNumber = $request->input('telephoneNumber');
        $studentProfile->countryCode = $request->input('countryCode');
        $studentProfile->country = $request->input('country');
        $studentProfile->region = $request->input('region');
        $studentProfile->province = $request->input('province');
        $studentProfile->municipality = $request->input('municipality');
        $studentProfile->completeAddress = $request->input('completeAddress');
        $studentProfile->zipCode = $request->input('zipCode');
        $studentProfile->email = $request->input('email');
        $studentProfile->nationality = $request->input('nationality');
        $studentProfile->civilStatus = $request->input('civilStatus');

        $studentProfile->save();
        
        return redirect('/studentpro');
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
        $studentProfile = studentprofile::find($id);


        $studentProfile->photo = $request->input('photo');
        $studentProfile->firstName = $request->input('firstName');
        $studentProfile->lastName = $request->input('lastName');
        $studentProfile->middleName = $request->input('middleName');
        $studentProfile->dateOfBirth = $request->input('dateOfBirth');
        $studentProfile->age = $request->input('age');
        $studentProfile->placeOfBirth = $request->input('placeOfBirth');
        $studentProfile->mobileNumber = $request->input('mobileNumber');
        $studentProfile->telephoneNumber = $request->input('telephoneNumber');
        $studentProfile->countryCode = $request->input('countryCode');
        $studentProfile->country = $request->input('country');
        $studentProfile->region = $request->input('region');
        $studentProfile->province = $request->input('province');
        $studentProfile->municipality = $request->input('municipality');
        $studentProfile->completeAddress = $request->input('completeAddress');
        $studentProfile->zipCode = $request->input('zipCode');
        $studentProfile->email = $request->input('email');
        $studentProfile->nationality = $request->input('nationality');
        $studentProfile->civilStatus = $request->input('civilStatus');

        $studentProfile->save();
        
        return redirect('/studentpro');
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

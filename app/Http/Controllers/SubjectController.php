<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subjects;
use App\Models\TrackAndStrand;
use App\Models\Faculties;
use App\Models\GradeAndSection;


class SubjectController extends Controller
{
    public function index()
    {
        $subj = Subjects::all();
        $tands = TrackAndStrand::all();
        $fac = Faculties::all();
        $gands = GradeAndSection::all();
        return view('admin.subjects.subjects',['subjects'=>$subj]+['trackandstrands'=> $tands]+['gradeandsections'=> $gands]+['faculties'=> $fac]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            
            'trackID' => 'required',
            'strandID' => 'required',
            'subjectID' => 'required',
            'subjectName' => 'required',
            'subjectType' => 'required',
            'gradeLevel' => 'required',
            'Semester' => 'required',
        ]);

        $subject = new Subjects;

        $subject->trackID = $request->input('trackID');
        $subject->strandID = $request->input('strandID');
        $subject->subjectID = $request->input('subjectID');
        $subject->subjectName = $request->input('subjectName');
        $subject->subjectType = $request->input('subjectType');
        $subject->gradeLevel = $request->input('gradeLevel');
        $subject->Semester = $request->input('Semester');

        $subject->save();

        return redirect('/admin/subjects')->with('Success', 'Data Saved');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GradeAndSection;
use App\Models\Students;
use App\Models\TrackAndStrand;
use App\Models\Faculties;
use App\Models\Subjects;
use App\Models\Classes;
use Illuminate\Support\Facades\DB;

class GradeAndSectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $gandsec = gradeandsection::all();
        $tands = TrackAndStrand::all();
        $facs = Faculties::all();
        $subs = Subjects::all();
        $stud = Students::all();
        return view('admin.gradeandsection.gradeandsection',['gradeandsections'=>$gandsec]+['trackandstrand'=>$tands]+['faculties'=>$facs]+['subjects'=>$subs]+['students'=>$stud]);
        // return view('admin.gradeandsection.gradeandsection')->with('gradeandsections', $gandsec);
    }

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

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

            'sectionID' => 'required',
            'sectionName' => 'required',
            'gradeLevel' => 'required',
            'faculty' => 'required',
            'subjectID' => 'required',
             'startHr' => 'nullable',
             'endHr' => 'nullable',
            'schedule' => 'required',
            
            
        ]);

        $gradeandsection = new gradeandsection;

        $gradeandsection->sectionID = $request->input('sectionID');
        $gradeandsection->sectionName = $request->input('sectionName');
        $gradeandsection->gradeLevel = $request->input('gradeLevel');
        $gradeandsection->faculty = $request->input('faculty');
        $gradeandsection->subjectID = $request->input('subjectID');
        $gradeandsection->startHr = $request->input('startHr');
        $gradeandsection->endHr = $request->input('endHr');
        $gradeandsection->schedule = $request->input('schedule');
        

        $gradeandsection->save();
        return redirect('/admin/gradeandsection')->with('Success', 'Data Saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $data = Students::all();

        // $data = DB::table('students')->find(section);
        
        // return view('admin.gradeandsection.show',['students'=>$data]);
        
        // $students = students::all();
        // $students =  DB::table('students')
        // ->where('section','=','ICT A')
        // ->get();
        
        $gradeandsection = GradeAndSection::find($id);
        $stud = DB::table('students')
        ->where('sectionID','=',$id)
        ->get();

        $gradeandsection = gradeandsection::all();
        $studs = DB::table('students')
        ->where('sectionID','=',$id)
        ->get(); 
        
        $gradeandsection = DB::table('grade_and_sections')
        ->where('sectionID','=',$id)
        ->get();
        // $stud = students::find($);        
        return view ('admin.gradeandsection.show',['gradeandsections'=>$gradeandsection]+['classes'=>$studs]+['students'=>$stud]+['students'=>$data]);
        // $gandsec = gradeandsection::find($id);
        // return view('admin.gradeandsection.join',['grade_and_sections'=>$sectionID]);
        // return view('admin.gradeandsection.show',['gradeandsection'=>$gandsec]+['students'=>$stud]);
        
    }

    public function showClass($id){

        // $students = students::find($id);
        // $student = students::all();
        // return view('admin.gradeandsection.showClass',['students'=>$students],['student'=>$student]);
    }

    // public function join(){
    //     $result = DB::table('grade_and_sections')
    //     ->leftJoin('students',function($join){
    //         $join->on('grade_and_sections.sectionName','=','students.section');
    //     })
    //     ->get();
    //     return $result;
    //     dd($result);
    // }
     public function test($id) {
              $gandsec = gradeandsection::findorFail($id);
            //   $cla = classes::all();
             
              return view('admin.gradeandsection.show',['gradeandsections'=>$gandsec]);
         }

    //  public function filterdata() 
    //  {
    //      return view ('admin.gradeandsection.show');
    //  }
    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    
    //  public function getStudent() {
    //     $p=students::all();
    //     var_dump($p);
    //    return response()->json($p);
    // }

     public function edit($id)
    {
        //
    }

    //  public function filtercreate(Request $request) {
    //      //dd($request);
    //      $validated = $request->validate([
    //          "studentID"=>['required'],
    //          "firstName"=>['required'],
    //          "middleName"=>['required'],
    //          "lastName"=>[ 'required'],
    //          "gender"=>[ 'required'],
    //          "dateOfBirth"=>[ 'required'],
    //         "address"=>[ 'required'],
    //          "strandID"=>[ 'required'],
    //         "schoolLastAttended"=>[ 'required'],
    //         "email"=> ['required'],
    //          "password"=>['required'],
    //          "section"=>[ 'required'],
    //         "subject"=>[ 'required'],
    //      ]);

    //      $section = GradeAndSection::create($validated);

    //      return back()->with('message','Successfully Created');
    //  }
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
            'sectionID' => 'required',
            'sectionName' => 'required',
            'gradeLevel' => 'required',
            'faculty' => 'required',
            'subject' => 'required',
            
        ]);

        $gradeandsection = gradeandsection::find($id);

        $gradeandsection->sectionID = $request->input('sectionID');
        $gradeandsection->sectionName = $request->input('sectionName');
        $gradeandsection->gradeLevel = $request->input('gradeLevel');
        $gradeandsection->faculty = $request->input('faculty');
        $gradeandsection->subject = $request->input('subject');
        

        $gradeandsection->save();
        return redirect('/admin/gradeandsection')->with('Success', 'Data Updated');
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

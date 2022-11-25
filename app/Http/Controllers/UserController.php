<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Fascades\Hash;
use Illuminate\Support\Fascades\View;
use Illuminate\Validation\Rule;
use App\Models\Enrollment;
use App\Models\StudentProfile;
use App\Models\Students;
class UserController extends Controller
{
    public function process(Request $request){
        $validated = $request->validate([
            "email"=>['required','email'],
            "password" => 'required'
        ]);

        if(auth()->attempt($validated)){
            $request->session()->regenerate();

            return redirect('/dashboard')->with('message','Welcome');
        }else{
            return redirect('/dashboard')->with('message','login failed');        
        }

    }
    //end
    public function about(){
        return view('about');
    }

    public function index(){
        return view('welcome');
    }

    public function register(){
        return view('register');
    }

    public function password(){
        return view('Password');
    }

    public function Calendar(){
        return view('Calendar');
    }

    public function contact(){
        return view('contact');
    }

    //enrollment store function

    public function enrollmentStore(Request $request){
        
        $enrollment = new enrollment;

        $enrollment->firstName = $request->input('firstName');
        $enrollment->lastName = $request->input('lastName');
        $enrollment->middleName = $request->input('middleName');
        $enrollment->mobileNumber = $request->input('mobileNumber');
        $enrollment->gender = $request->input('gender');
        $enrollment->studentOccupation = $request->input('studentOccupation');
        $enrollment->dateOfBirth = $request->input('dateOfBirth');
        $enrollment->placeOfBirth = $request->input('placeOfBirth');
        $enrollment->age = $request->input('age');
        $enrollment->track = $request->input('track');
        $enrollment->grade = $request->input('grade');
        $enrollment->houseNumber = $request->input('houseNumber');
        $enrollment->streetName = $request->input('streetName');
        $enrollment->baranggay = $request->input('baranggay');
        $enrollment->city = $request->input('city');
        $enrollment->province = $request->input('province');
        $enrollment->zipCode = $request->input('zipCode');
        $enrollment->motherName = $request->input('motherName');
        $enrollment->motherContactNumber = $request->input('motherContactNumber');
        $enrollment->motherOccupation = $request->input('motherOccupation');
        $enrollment->fatherName = $request->input('fatherName');
        $enrollment->fatherOccupation = $request->input('fatherOccupation');
        $enrollment->fatherContactNumber = $request->input('fatherContactNumber');

        $enrollment->save();
        
        return redirect('/Login');
    }

   
    public function homepage(){
        return view('homepage');    
    }

    public function course(){
        return view('course');    
    }

    public function studentproStore(Request $request)
    {
        // $request->validate(
        //     ['image'=>'image|mimes:png,jpg'],
        // );

        // $image_name = $request->image->extension();
        // $request->image->move(public_path('photos'),$image_name);

        $studentProfile = new studentprofile;

        $studentProfile->image = $request->input('image');
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

    public function studentproUpdate(Request $request, $id){

        $request->validate(
            ['image'=>'image|mimes:png,jpg'],
        );

        $image_name = $request->image->extension();
        $request->image->move(public_path('photos'),$image_name);

        
        $studentProfile = studentprofile::find($id);


        $studentProfile->image = $request->input('image');
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
    
    //for login view 
    public function login(){
        if (view()->exists('Login'))
        {
            return view('Login');
        }else{
            return (404);
        
         }
    }

    
    public function store(Request $request){
        $validated = $request->validate([
            "name"=>['required','min:4'],
            "email"=>['required','email',Rule::unique('users','email')],
            "password" => 'required|confirmed|min:6'
    
        ]);
                                //Hash::make($validated['password']);
        $validated['password'] = bcrypt($validated['password']);
    
        $user = Students::create($validated); // create a variable and call the User mo
        auth()->login($user);
        return redirect('/Login');
}
//for logout function
   public function logout(Request $request){
    auth()->logout();

    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect('/homepage')->with('message','Log out successful');
   }

}
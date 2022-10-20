<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Fascades\Hash;
use Illuminate\Support\Fascades\View;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function process(Request $request){
        $validated = $request->validate([
            "email"=>['required','email'],
            "password" => 'required'
        ]);

        if(auth()->attempt($validated)){
            $request->session()->regenerate();

            return redirect('/')->with('message','Welcome');
        }
    }
    //end

    public function index(){
        return view('welcome');
    }

    public function register(){
        return view('register');
    }

    public function password(){
        return view('Password');
    }

    public function enrollment(){
        return view('enrollment');
    }

    public function Calendar(){
        return view('Calendar');
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
    
        $user = User::create($validated); // create a variable and call the User mo
        auth()->login($user);
        return redirect('/login');
}
//for logout function
   public function logout(Request $request){
    auth()->logout();

    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect('/login')->with('message','Log out successful');
   }

}
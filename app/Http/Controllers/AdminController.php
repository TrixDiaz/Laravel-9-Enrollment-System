<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Fascades\Hash;
use Illuminate\Support\Fascades\View;
use Illuminate\Validation\Rule;
use DB;


class AdminController extends Controller
{
     //for login view 
     public function login(){
        if (view()->exists('admin/Login'))
        {
            return view('admin/Login');
        }else{
            return (404);
        
         }
    }
    public function process(Request $request){
        $validated = $request->validate([
            "email"=>['required','email'],
            "password" => 'required'
        ]);

        if(auth()->attempt($validated)){
            $request->session()->regenerate();

            return redirect('/admin/admindashboard')->with('message','Welcome');
        }else{
            return redirect('/admin/admindashboard')->with('message','login failed');        
        }

    }
    
    public function store(Request $request){
        $validated = $request->validate([
            "name"=>['required','min:4'],
            "email"=>['required','email',Rule::unique('admins','email')],
            "password" => 'required|confirmed|min:6'
    
        ]);
                                //Hash::make($validated['password']);
        // $validated['password'] = bcrypt($validated['password']);
    
        $admin = Admin::create($validated); // create a variable and call the User mo
        auth()->login($admin);
        return redirect('admin/Login');
}
//for logout function
   public function logout(Request $request){
    auth()->logout();

    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect('admin/Login')->with('message','Log out successful');
   }
    
    public function register(){
    return view('admin/register');
    }
    
    public function index(){
    return view('admin/admindashboard');
    }
    
   
    
    
    
    
    // public function adminlogin(Request $req){
    // $data=$req->input();
    // $req->session()->put('admin/adminuser',$data['email']);
    // return session('admin/adminuser');
    // }
    
    // public function homepage(){
    //     return view('/admin/homepage');
    // }
}
<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function index(){
        return view('admin.login');
    }
    public function dashboard(){
        return view('admin.dashboard');
    }

    public function form(){
        return view('admin.form');
    }
    public function table(){
        return view('admin.table');
    }

    // public function authenticate(Request $request){
        
    //     $request->validate([
    //         "email" => 'required',
    //         "password"=>'required'
    //     ]);
        
    //     if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {
    //         $admin = Auth::guard('admin')->user();
    //         Session::put('admin_user', $admin);
    //         return redirect()->route('admin.dashboard'); // Redirect instead of returning view
    //     } else {
    //         return redirect()->route('admin.login')->with('error', 'Something went wrong');
    //     }
   
    // }

    public function authenticate(Request $request)
        {
            $credentials = $request->validate([
                "email" => 'required|email',
                "password" => 'required'
            ]);

            if (Auth::guard('admin')->attempt($credentials)) {
                $request->session()->regenerate();
                $admin = Auth::guard('admin')->user();
                Session::put('admin_user', $admin);
                return redirect()->route('admin.dashboard')->with('success', 'Login successful');
            }

            return redirect()->route('admin.login')->with('error', 'Invalid credentials');
        }


    // public function register(){
    //     $user = new User();
    //     $user->name ="vishal";
    //     $user->role ="admin";
    //     $user->email = "vishaldev2024@gmail.com";
    //     $user->password = Hash::make('admin');
    //     $user->save();
    //     return redirect()->route('admin.login')->with('success','User created sucessfully');
    // }


    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('admin.login')->with('success', 'Logged out successfully.');
    }
    
}

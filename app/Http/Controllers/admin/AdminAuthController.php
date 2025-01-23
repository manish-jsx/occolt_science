<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
// use Illuminate\Support\Facades\Auth;
use Session;
use App\Models\Admin;
use Hash;

class AdminAuthController extends Controller
{
    public function login(){
        return view('admin/auth/login');
    }

    public function customLogin(Request $request){
        // dd($request->all());
        // dd(Hash::make(1234));
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $userdata=$request->only('email', 'password');
        // dd(Auth::guard('admin')->attempt($userdata));
        if(Auth::guard('admin')->attempt($userdata)){
            // echo "user login suessfully";
            // dd('hi');
            return redirect()->route('admin.dashbord')->with(['message' => 'Login successfully. !', 'alert-type' => 'success']);
        }else{
            // echo "user data invalid";
            return redirect()->route('admin.login')->with(['message' => 'Login credentials invalid. !', 'alert-type' => 'error']);
        }

    }

    public function changePassword(){
        return view('admin.auth.change-password');
    }

    
    public function NewPassword(Request $request){
        // dd($request->all());
        $request->validate([
            'password'=>'required',
            'new_password'=>'required|min:6',
            'confirm_password'=>'required|same:new_password'
        ]);

        $admin=Auth::guard('admin')->user();
        // dd($user);
        if(!Hash::check($request->input('password'), $admin->password)){
            return redirect()->route('admin.change_password')->with(['message' => 'The current password is incorrect. !', 'alert-type' => 'error']);
        }else{
            $admin->password=Hash::make($request->input('new_password'));
            $admin->save();
            // dd($user);
            return redirect()->route('admin.dashbord')->with(['message' => 'Password updated successfully. !', 'alert-type' => 'success']);
        }
    }
    

    public function logout(){
        Session::flush();
        Auth::logout();
        return redirect()->route('admin.login')->with(['message' => 'Logout Successfully !', 'alert-type' => 'success']);
    }
}

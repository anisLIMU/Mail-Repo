<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class authcontroller extends Controller
{


 public function showsignup()
 {
     return view('admin.signup');
 }
 public function signup(Request $request)
 {
    $signup = $request->validate([
        'name'=>'required',
        'email'=>'required|email',
        'password' => ['required', 'string', 'min:8', 'confirmed'],
    ]);
    $signup['password']=bcrypt($signup['password']);
     Admin::create($signup);
     return response('created sucessfuly');
 }

 public function showlogin()
 {
    return view('admin.login');
 } 
 public function login(Request $request)
 {
    $input = $request->validate([
        'email'=>'required|email',
        'password'=>'required'
    ]);
    if (Auth::guard('admin')->attempt($input)) {
      $request->session()->regenerate();  
       return response('good work');        
    } else {
      return response('NOT');
    }
 }
 public function logout(Request $request) {
   Auth::guard('admin')->logout(); 
   $request->session()->invalidate();
   $request->session()->regenerateToken();
   return redirect('/')->with('message', 'تم تسجيل الخروج!');
}

}

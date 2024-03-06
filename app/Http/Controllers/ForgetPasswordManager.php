<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
class ForgetPasswordManager extends Controller
{
    public function showforgetPassword()
    {
        return view('admin.forgetpassword');
    }
    public function ForgetPassword(Request $request)
    { 
        $request->validate([
            'email'=>'required|email|exists:admins',
        ]);
        $token = Str::random(64) ;

        DB::table('admin_password_reset_tokens')->insert([
            'email'=>$request->email,
            'token'=>$token,
            'created_at'=>Carbon::now()
        ]);
        Mail::send('admin.emails.forgetpassword',['token'=>$token],function($message) use($request){
            $message->to($request->email);
            $message->subject('reset password ');
        });
     }
    public function showresetPassword($token)
    {
        return view('admin.newPassword', compact('token'));
    }
    public function resetPassword(Request $request)
    {
        $request->validate([
            'email'=>'required|email|exists:admins',
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'password_confirmation'=>'required'
        ]);
        $updatepassword= DB::table('admin_password_reset_tokens')->where([
            'email'=>$request->email,
            'token'=>$request->token
        ])->first();
        if (!$updatepassword) {
             return response('erorr');
        }
        Admin::where('email', $request->email)->update(['password'=>bcrypt($request->password)]);
        DB::table('admin_password_reset_tokens')->where(['email'=>$request->email])->delete();
        return redirect()->to(route('admin.login'));
    }
}

<?php

use App\Http\Controllers\authcontroller;
use App\Http\Controllers\ForgetPasswordManager;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('login',[authcontroller::class, 'showlogin'])->name('admin.showlogin');
Route::post('login',[authcontroller::class, 'login'])->name('admin.login');
Route::get('signup',[authcontroller::class, 'showsignup'])->name('admin.showsignup');
Route::post('signup',[authcontroller::class, 'signup'])->name('admin.signup');
Route::get('showforgetPassword',[ForgetPasswordManager::class,'showforgetPassword'])->name('showforgetPassword');
Route::post('ForgetPassword',[ForgetPasswordManager::class,'ForgetPassword'])->name('Forget.password');
Route::get('showresetPassword/{token}',[ForgetPasswordManager::class,'showresetPassword'])->name('showresetPassword');
Route::post('resetPassword',[ForgetPasswordManager::class,'resetPassword'])->name('resetPassword');   
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{
 function index(){
    return view('page/auth/signIn', [
        "title" => "SignIn"
    ]);

 }
 function login(Request $request){
    $request->validate([
     'name'=>'required',
     'password'=>'required'
    ], [
        'name.required'=>'nama wajib diisi !',
        'password.required'=>'Password wajib diisi !',

    ]);


if (Auth::attempt(['name' => $request->name, 'password' => $request->password])){
    $request->session()->regenerate();
    return redirect()->intended('/');
}else{
return back()->withFail('Nama dan Password salah !');
}

 }

 function logout(Request $request){
   Auth::logout();
   $request->session()->invalidate();
   $request->session()->regenerateToken();
   return redirect('/signIn');
 }
}

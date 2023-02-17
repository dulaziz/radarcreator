<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

use Illuminate\Support\Facades\Hash;

class SessionController extends Controller
{
 function index(){
    return view('page/auth/signIn', [
        "title" => "SignIn"
    ]);

 }
 function register(){
    return view('page/user/userAdd', [
        "title" => "user"
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

 public function logout(Request $request){
   Auth::logout();
   Session::flush();

   return redirect('/signIn');
 }

 public function register_action(Request $request)
 {
     $request->validate([
         'name' => 'required',
         'username' => 'required|unique:tb_user',
         'password' => 'required',
         'password_confirm' => 'required|same:password',
     ]);

     $user = new Request([
         'name' => $request->name,
         'username' => $request->username,
         'password' => Hash::make($request->password),
     ]);
     $user->save();

     return redirect()->route('login')->with('success', 'Registration success. Please login!');
 }



}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class SessionController extends Controller
{
 function index(){
    return view('page/auth/signIn', [
        "title" => "SignIn"
    ]);

 }
 public function editt()
 
 {
return view('page.user.userEdit', [
        "title" => "user"
    ]); }
function user(){
    return view('page.user.index', [
        "title" => "user",
        "user" => User::get(),

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
        'username' => 'required',
        'group' => 'required',
        'email' => 'required',
        'password' => 'required',
        'jabatan' => 'required',
        'role' => 'required',
        'gambar' => 'image',

    ]);


 $file_name = time() . '.' . request()->gambar->getClientOriginalExtension();

        request()->gambar->move(public_path('images'), $file_name);

     $user = new User();

        $user -> id = Str::uuid();
         $user -> name = $request->name;
         $user -> username = $request->username;
         $user -> group = $request->group;
         $user -> email = $request->email;
         $user -> password = Hash::make($request->password);
         $user -> jabatan = $request->jabatan;
         $user -> role = $request->role;
         $user -> gambar = $file_name;

     $user->save();

return redirect('/userAdd')->with('success', 'Berhasil Ditambahkan!');    }


public function edit($id)
{
    $user = User::find($id);
    return view('page.user.userEdit', [
        "title" => "user",
        "id" => "user",
        'user' => $user,

    ]);
}


}

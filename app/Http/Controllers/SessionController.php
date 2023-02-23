<?php

namespace App\Http\Controllers;

use App\Models\groups;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use App\Models\jabatan;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
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

    $user = DB::table('type_group')
    ->join('users', 'users.id_group', '=', 'type_group.id_group')
    ->join('type_jabatan', 'type_jabatan.id_jabatan', '=', 'users.id_jabatan')
        ->get();

    return view('page.user.index', [
        "title" => "user",
        "user" => $user,

    ]);
}
 
 function register(){

    return view('page/user/userAdd', [
        "title" => "user",
        "user" => groups::get(),
        "datas" => jabatan::get(),

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
        'id_group' => 'required',
        'email' => 'required',
        'password' => 'required',
        'id_jabatan' => 'required',
        'role' => 'required',
        'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

    ]);


 $file_name = time() . '.' . request()->gambar->getClientOriginalExtension();

        request()->gambar->move(public_path('images'), $file_name);

     $user = new User();

        $user -> id = Str::uuid();
         $user -> name = $request->name;
         $user -> username = $request->username;
         $user -> id_group = $request->id_group;
         $user -> email = $request->email;
         $user -> password = Hash::make($request->password);
         $user -> id_jabatan = $request->id_jabatan;
         $user -> role = $request->role;
         $user -> gambar = $file_name;

     $user->save();

return redirect('/userAdd')->with('success', 'Berhasil Ditambahkan!');  
  }


public function edit($id)
{
    
    $datas = DB::table('type_group')
    ->join('users', 'users.id_group', '=', 'type_group.id_group')
    ->join('type_jabatan', 'type_jabatan.id_jabatan', '=', 'users.id_jabatan')
    ->select('type_group.id_group', 'type_group.group', 'users.id', 'users.id_group', 'type_jabatan.id_jabatan', 'type_jabatan.jabatan')
    ->where('users.id', '=', $id)
    ->get();

    $user = User::find($id);
    return view('page.user.userEdit', [
        "title" => "user",
        'user' => $user,
        'role' => explode(',', $user->role),
        'datas' => $datas,
    ]);
}
public function update(Request $request)
{
    $request->validate([
        'name' => 'required',
        'username' => 'required',
        'id_group' => 'required',
        'email' => 'required',
        'password' => 'required',
        'id_jabatan' => 'required',
        'role' => 'required',
        'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        
    ]);

    $input = $request->all();

    if ($image = $request->file('gambar')) {
        $destinationPath = 'images/';
        $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
        $image->move($destinationPath, $profileImage);
        $input['gambar'] = "$profileImage";
    }else{
        unset($input['gambar']);
    }
      
    $request->update($input);

    return redirect('/user')->with('success', 'Berhasil Ditambahkan!');  
}



}

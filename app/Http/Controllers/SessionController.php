<?php

namespace App\Http\Controllers;

use App\Models\groups;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use App\Models\upload;
use App\Models\jabatan;
use App\Models\tb_user;
use Faker\Provider\UserAgent;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class SessionController extends Controller
{

    public function dashboard()
    {
        $user = DB::table('type_group')
        ->join('tb_upload', 'tb_upload.id_group', '=', 'type_group.id_group')
            ->get();
    
        return view('page.dashboard.index', [
            "title" => "dashboard",
            "user" => $user,
        ]);
    }


    public function update_upload(Request $request, upload $user)
    {
        $request->validate([
            'video_title' => 'required',
    
        ]);

        
       
   $input = $request->all();
    $produksi = implode(',',$input['produksi']);
    $name = implode(',',$input['name']);
    $platform = implode(',', $input['platform']);

    $user  = upload::find($request->id);
    $user->video_title = $input['video_title'];
    $user->produksi = $produksi;
    $user->name = $name;
    $user->platform = $platform;


    $user->status = 'Pending';



         
        if ($image = $request->file('video')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $user['video'] = "$profileImage";
        }else{
            unset($user['video']);
        }
    
       
            $user->save();
    
        return redirect('/user')->with('success', 'Berhasil Diubah!');  
    }
    







public function doalpu()
{


    
    $users = DB::table('type_jabatan')
    ->select('type_jabatan.id_khusus', 'type_jabatan.jabatan', 'type_jabatan.role')
    ->where('type_jabatan.id_khusus', '=', '1')
    ->get();

   

    
    return view('page.upload.index', [
        "title" => "upload",
        "post" => groups::get(),  
        "users" => User::get(),  
        "userss" => $users,  
        
     
              
    ]);

}

public function tambah_upload(Request $request)
{
    {
        $request->validate([
           'tanggal' => 'required',
           'id_group' => 'required',
           'video_title' => 'required',
           'video' => 'required|file|mimetypes:video/mp4',
           'produksi' => 'required',
           'name' => 'required',
           'platform' => 'required',
   
       ]);
           
    $file_name = time() . '.' . request()->video->getClientOriginalExtension();
   
           request()->video->move(public_path('images'), $file_name);
   
   

            $input = $request->all();
    $produksi = implode(',',$input['produksi']);
    $name = implode(',',$input['name']);
    $platform = implode(',', $input['platform']);

    $user = new upload();
    $user -> id = Str::uuid();
    $user->tanggal = $input['tanggal'];
    $user->id_group = $input['id_group'];
    $user->video_title = $input['video_title'];
   
    $user->video = $file_name;
    $user->produksi = $produksi;
    $user->name = $name;
    $user->platform = $platform;


    $user->status = 'Pending';


   
        $user->save();
   
   return redirect('/uploaded')->with('success', 'Berhasil Ditambahkan!');  
     }
}


public function uploadedd()
{

    $user = DB::table('type_group')
    ->join('tb_upload', 'tb_upload.id_group', '=', 'type_group.id_group')
        ->get();

    return view('page.uploaded.index', [
        "title" => "uploaded",
        "user" => $user,


    ]);
}

public function editupload($id, tb_user $userr)
{
     
    $datas = DB::table('type_group')
    ->join('users', 'users.id_group', '=', 'type_group.id_group')
    ->join('tb_upload', 'tb_upload.id_group', '=', 'type_group.id_group')
    ->join('type_jabatan', 'type_jabatan.id_jabatan', '=', 'users.id_jabatan')
        ->select('type_group.id_group', 'type_group.group', 'tb_upload.id', 'tb_upload.video',    'users.id_group', 'type_jabatan.id_jabatan', 'type_jabatan.jabatan')

    ->get();
   
   
    $users = DB::table('type_jabatan')
    
    ->select('type_jabatan.id_khusus', 'type_jabatan.user', 'type_jabatan.jabatan', 'type_jabatan.role', 'type_jabatan.id_jabatan', )
    
    ->where('type_jabatan.id_khusus', '=', '1')
    ->get();

     
    $userr = DB::table('type_jabatan')
    
    ->select('type_jabatan.id_khusus', 'type_jabatan.user', 'type_jabatan.jabatan', 'type_jabatan.role', 'type_jabatan.id_jabatan', )
    
    ->where('type_jabatan.id_khusus', '=', '1')
    ->get();



    $tb_user = DB::table('tb_user')
    
    ->select('tb_user.id', 'tb_user.produksi', 'tb_user.name')
    
    ->where('tb_user.id', '=', $id)
    ->get();

    $use = DB::table('users')
    
    ->select('users.name')
    
    ->get();



    $user = upload::find($id);
    return view('page.uploaded.editUpload', [
        "title" => "uploaded",
        'user' => $user,
        'tb_user' => $tb_user,
        "users" => groups::get(),
        "userss" => $users,
        "use" => $use,  







    ]);
}



 function index(){
    return view('page/auth/signIn', [
        "title" => "SignIn"
    ]);

 }
function user(){

    $user = DB::table('type_group')
    ->join('users', 'users.id_group', '=', 'type_group.id_group')
    ->join('type_jabatan', 'type_jabatan.id_jabatan', '=', 'users.id_jabatan')

    ->orderBy('users.id', 'asc')
            ->get();

    return view('page/user/index', [
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
         $user -> gambar = $file_name;

     $user->save();

return redirect('/user')->with('success', 'Berhasil Ditambahkan!');  
  }


public function edit($id)
{
    
    $datas = DB::table('type_group')
    ->join('users', 'users.id_group', '=', 'type_group.id_group')
    ->join('type_jabatan', 'type_jabatan.id_jabatan', '=', 'users.id_jabatan')
    ->select('type_group.id_group', 'type_group.group', 'users.id',  'users.id_group', 'type_jabatan.id_jabatan', 'type_jabatan.jabatan')
    ->get();

    $user = User::find($id);
    return view('page.user.userEdit', [
        "title" => "user",
        'user' => $user,
        'datas' => $datas,
        "users" => groups::get(),
        "userss" => jabatan::get(),

    ]);
}

public function update(Request $request, User $user)
{
        $request->validate([
           'name' => 'required',
           'username' => 'required',
           'id_group' => 'required',
           'email' => 'required',
           'password' => 'required',
           'id_jabatan' => 'required',
           'gambar' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
   


           
       ]);
   
       $user  = User::find($request->id);
       $user -> name = $request->name;
            $user -> username = $request->username;
            $user -> id_group = $request->id_group;
            $user -> email = $request->email;
            $user -> password = Hash::make($request->password);
            $user -> id_jabatan = $request->id_jabatan;
     
    if ($image = $request->file('gambar')) {
        $destinationPath = 'images/';
        $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
        $image->move($destinationPath, $profileImage);
        $user['gambar'] = "$profileImage";
    }else{
        unset($user['gambar']);
    }

   
        $user->save();

    return redirect('/user')->with('success', 'Berhasil Diubah!');  
}

public function delete(User $user, $id)
{
$delete = User::findOrFail($id);
Storage::delete('public/posts/'. $user->image);

$delete->delete(); 
return redirect('/user')->with('success', 'Berhasil Dihapus!');  


}


}

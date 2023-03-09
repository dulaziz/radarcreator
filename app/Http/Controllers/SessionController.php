<?php

namespace App\Http\Controllers;

use App\Models\groups;
use Carbon\Carbon;
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
public function construct()
{
$this->middleware('auth');
}

    public function uploadedd(Request $request)

    {
    
     $user = DB::table('type_group')
    ->join('tb_upload', 'tb_upload.id_group', '=', 'type_group.id_group');
    
    if($request->roles){
        $user = upload::where('bulan',$request->roles);
    }
    
    if($request->search){
        $user = upload::where('video_title','LIKE', '%' .$request->search. '%');
    }    
     $user = $user->orderBy('id','DESC')->paginate(10);
         return view('page.uploaded.index',  [
            "title" => "uploaded",
            "user" => $user,
        ]);
    }
    
    public function dashboard(Request $request)
    {

        $sum = upload::where('tb_upload.name_upload', '=', Auth::user()->name)->count();
        $sem = upload::where('tb_upload.status', '=', 'Pending')->count();
        $sam = upload::where('tb_upload.status', '=', 'Published')->count();
        $som = upload::where('tb_upload.status', '=', 'TakeDown')->count();


        $user = DB::table('type_group')
        ->join('tb_upload', 'tb_upload.id_group', '=', 'type_group.id_group')
        ->where('tb_upload.name_upload', '=', Auth::user()->name);

               if($request->roles){
            $user = upload::where('bulan',$request->roles);
        }
        if($request->select){
            $user = upload::where('id_group',$request->select);
        }
        
        if($request->search){
            $user = upload::where('video_title','LIKE', '%' .$request->search. '%');
        }  
        $user = $user->orderBy('id','DESC')->paginate(10);
    
        return view('page.dashboard.index', [
            "title" => "dashboard",
            "user" => $user,
            "users" => groups::get(),  
            "sum" => $sum,
            "sem" => $sem,
            "sam" => $sam,
            "som" => $som,


        ]);
    }




    public function update_upload(Request $request, $uuid)
    {
        $user = upload::find($uuid);

        $input = $request->all();
        $request->validate([
            'id_group' => 'required',
            'tanggal' => 'required',
            'video_title' => 'required',
            'produksi' => 'required',
            'name' => 'required',
            'platform' => 'required',
            'video' => 'mimes:mp4,mov,ogg | max:20000',



        ]);

    if ($request->hasFile('video')) {

        //upload new image

        $image = $request->file('video');
        $image->storeAs('public/posts', $image->hashName());

        //delete old image
        Storage::delete('public/posts'.$user->video);

        //update post with new image
        $user->update([
            
            $user ->video     = $image->hashName(),
            $produksi = implode(',',$input['produksi']),
            $name = implode(',',$input['name']),
            $platform = implode(',', $input['platform']),

            $user->id_group = $input['id_group'],
            $user->tanggal = $input['tanggal'],
            
            
            $user->video_title = $input['video_title'],
            $user->produksi = $produksi,
            $user->name = $name,
            $user->platform = $platform
     
        ]);
        return redirect('/uploaded')->with('success', 'Berhasil Diubah!');  

    } else {

        //update post without image
        $user->update([
            $produksi = implode(',',$input['produksi']),
            $name = implode(',',$input['name']),
            $platform = implode(',', $input['platform']),
            $user->id_group = $input['id_group'],
            $user->tanggal = $input['tanggal'],
            $user->video_title = $input['video_title'],
            $user->produksi = $produksi,
            $user->name = $name,
            $user->platform = $platform
        
      
        ]);
        return redirect('/uploaded')->with('success', 'Berhasil Diubah!');  

    }


    }



    public function search(Request $request)
    {
        $month = $request->input('tanggal');
        
        if ($month) {
            $posts = upload::searchByMonth($month)->get();
        } else {
            $posts = upload::all();
        }
    
        return view('page.upload.index', [
            "title" => "upload",
          
            "posts" => $posts,  
            
         
                  
        ]);
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
    $input = $request->all();
    $user = new upload();
    $user-> id = Str::uuid();

    setlocale(LC_TIME, 'id_ID.utf8'); // set lokalisasi untuk bahasa Indonesia
    

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
           
            //upload new image
            $request->hasFile($input['video']);

            $image = $request->file('video');
            $image->storeAs('public/posts', $image->hashName());
    
            //delete old image
    $produksi = implode(',',$input['produksi']);

    $name = implode(',',$input['name']);
    $platform = implode(',', $input['platform']);
    $user->tanggal = $input['tanggal']; 
    $user->id_group = $input['id_group'];
    $user->video_title = $input['video_title'];
   
    $user->video = $image->hashName();
    $user->produksi = $produksi;
    $user->name = $name;
    $user->platform = $platform;


    $user->platform = $platform;



    $user->status = 'Pending';
    $user->bulan = Carbon::now()->isoFormat('MMMM');

    $user->name_upload = Auth::user()->name;
    $user->gambar = Auth::user()->gambar;


   
        $user->save();
   
   return redirect('/uploaded')->with('success', 'Berhasil Ditambahkan!');  
     }
}





public function editupload($id, tb_user $userr)
{
     
    
   
   
    $users = DB::table('type_jabatan')
    
    ->select('type_jabatan.id_khusus', 'type_jabatan.user', 'type_jabatan.jabatan', 'type_jabatan.role', 'type_jabatan.jabatan', )
    
    ->where('type_jabatan.id_khusus', '=', '1')
    ->get();



    $use = DB::table('users')
    
    ->select('users.name')
    
    ->get();



    $user = upload::find($id);
    return view('page.uploaded.editUpload', [
        "title" => "uploaded",
        'user' => $user,
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
    ->join('users', 'users.group', '=', 'type_group.group')
    ->join('type_jabatan', 'type_jabatan.jabatan', '=', 'users.jabatan')

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



 public function logout(){
   Auth::logout();
   Session::flush();

   return redirect('/signIn');
 }

 public function register_action(Request $request)
 {
    $input = $request->all();

    $user = new User();

       $user -> id = Str::uuid();
     $request->validate([
        'name' => 'required',
        'username' => 'required',
        'group' => 'required',
        'email' => 'required',
        'password' => 'required',
        'jabatan' => 'required',
        'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

    ]);

  //upload new image
  $request->hasFile($input['gambar']);

  $image = $request->file('gambar');
  $image->storeAs('public/posts', $image->hashName());

 
        $user->name = $input['name'];
        $user->username = $input['username'];
        $user->group = $input['group'];
        $user->email = $input['email'];
        $user->password = Hash::make($input['password']);
        $user->jabatan = $input['jabatan'];
        $user->gambar = $image->hashName();
        $user->role = $input['jabatan'];

     $user->save();

return redirect('/user')->with('success', 'Berhasil Ditambahkan!');  
  





}


public function edit($id)
{
    
    $datas = DB::table('type_group')
    ->join('users', 'users.group', '=', 'type_group.group')
    ->join('type_jabatan', 'type_jabatan.jabatan', '=', 'users.jabatan')
    ->select('type_group.group', 'type_group.group', 'users.id',  'users.group', 'type_jabatan.jabatan', 'type_jabatan.jabatan')
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

public function update(Request $request,  $uuid)
{
    $user = User::find($uuid);

        $this->validate($request, [
            'name' => 'required',
           'username' => 'required',
           'group' => 'required',
           'email' => 'required',
           'password' => 'required',
           'jabatan' => 'required',
           'gambar' => 'image|mimes:jpeg,png,jpg|max:2048'
   


           
       ]);
       if ($request->hasFile('gambar')) {

        //upload new image

        $image = $request->file('gambar');
        $image->storeAs('public/posts', $image->hashName());

        //delete old image
        Storage::delete('public/posts'.$user->gambar);

        //update post with new image
        $user->update([
            
            $user -> gambar     = $image->hashName(),
            $user -> name = $request->name,
                 $user -> username = $request->username,
                 $user -> group = $request->group,
                 $user -> email = $request->email,
                 $user -> password = Hash::make($request->password),
                 $user -> jabatan = $request->jabatan
                 
        ]);
        return redirect('/user')->with('success', 'Berhasil Diubah!');  

    } else {

        //update post without image
        $user->update([
            $user -> name = $request->name,
            $user -> username = $request->username,
            $user -> group = $request->group,
            $user -> email = $request->email,
            $user -> password = Hash::make($request->password),
            $user -> jabatan = $request->jabatan
        ]);
        return redirect('/user')->with('success', 'Berhasil Diubah!');  

    }

}


public function delete(User $user, $id)
{
$delete = User::findOrFail($id);
Storage::delete('public/posts/'. $user->image);
$delete->delete(); 
return redirect('/user')->with('success', 'Berhasil Dihapus!');  


}
public function delete_upload(upload $upload, $id)
{
$delete = upload::findOrFail($id);
Storage::delete('public/posts/'. $upload->image);

$delete->delete(); 
return redirect('/uploaded')->with('success', 'Berhasil Dihapus!');  


}

}

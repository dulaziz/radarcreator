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
public function chart()
{
    # code...
} 


public function halaman_revenue($uuid)
{
    $user = DB::table('tb_upload') //join table users and table user_details base from matched id;
    ->join('type_group', 'tb_upload.id_group', '=', 'type_group.id_group')
    ->find($uuid); //find the record matched to the current authenticated user's id from the joint table records
    $start_date = upload::pluck('bulan')->first();

        return view('page.revenue.addRevenue', [
           "title" => "revenue",
           "user" => $user,
           "start_date" => $start_date


        ]); 
    }

    public function add_revenue(Request $request, $uuid)
    {
        $user = upload::find($uuid);

        $input = $request->all();
        $request->validate([
            'viewer_bulan' => 'required',
            'impression_bulan' => 'required',
            'revenue_bulan' => 'required',
            'revenuedate_bulan' => 'required',
            'viewer_harian' => 'required',
            'impression_harian' => 'required',
            'revenue_harian' => 'required',
            'revenuedate_harian' => 'required',
        ]);
    
        $user->update([
    
            $user->viewer_bulan = $input['viewer_bulan'],
            $user->impression_bulan = $input['impression_bulan'],
            $user->revenue_bulan = $input['revenue_bulan'],
            $user->revenuedate_bulan = $input['revenuedate_bulan'],
            $user->viewer_harian = $input['viewer_harian'],
            $user->impression_harian = $input['impression_harian'],
            $user->revenue_harian = $input['revenue_harian'],
            $user->revenuedate_harian = $input['revenuedate_harian'],

    
        ]);
        return redirect('/revenue')->with('success', 'Berhasil Diubah!');  
    
    
    }
        
    


public function revenues(Request $request)
{
    $user= DB::table('tb_upload')
    ->join('type_group', 'tb_upload.id_group', '=', 'type_group.id_group')
    ->select('type_group.group', 'tb_upload.video_title', 'tb_upload.updated_at',  'tb_upload.id', 'tb_upload.name', 'tb_upload.tanggal', 'tb_upload.status', 'type_group.id_group', 'tb_upload.status', 'tb_upload.platform',   'tb_upload.viewer_bulan','tb_upload.impression_bulan','tb_upload.revenue_bulan','tb_upload.revenuedate_bulan','tb_upload.viewer_harian','tb_upload.impression_harian','tb_upload.revenue_harian','tb_upload.revenuedate_harian',)
    ->where('tb_upload.status', '=', 'Published');

    if($request->select){
        $user = upload::where('tb_upload.status', '=', 'Published')
        ->where('id_group',$request->select);
    }
    if($request->search){
        $user = upload::where('tb_upload.status', '=', 'Published')
        ->where('video_title','LIKE', '%' .$request->search. '%');
    }  
    if($request->roles){
        $user = upload::where('tb_upload.status', '=', 'Published')
        ->where('bulan',$request->roles);
    }

    $user = $user->orderBy('updated_at','DESC')->paginate(10);

    return view('page.revenue.index', [
        "title" => "revenue",
        "user"  => $user,

        "users" => groups::get(),  


    ]);
}

public function detail_revenue($uuid)
{
    $user = DB::table('tb_upload') //join table users and table user_details base from matched id;
    ->join('type_group', 'tb_upload.id_group', '=', 'type_group.id_group')
    ->find($uuid); //find the record matched to the current authenticated user's id from the joint table records
    $start_date = upload::pluck('tanggal')->first();
    $end_date = Carbon::parse($start_date)->addDays(13)->toDateString();
    $Januari = upload::where('tb_upload.bulan', '=', 'Januari')->count();
    $Februari = upload::where('tb_upload.bulan', '=', 'Februari')->count();
    $Maret = upload::where('tb_upload.bulan', '=', 'Maret')->count();
    $sales = upload::where('tb_upload.bulan', '=', 'April')->count();
    $sales = upload::where('tb_upload.bulan', '=', 'Mei')->count();
    $sales = upload::where('tb_upload.bulan', '=', 'Juni')->count();
    $sales = upload::where('tb_upload.bulan', '=', 'Juli')->count();
    $sales = upload::where('tb_upload.bulan', '=', 'Agustus')->count();
    $sales = upload::where('tb_upload.bulan', '=', 'September')->count();
    $sales = upload::where('tb_upload.bulan', '=', 'Oktober')->count();
    $sales = upload::where('tb_upload.bulan', '=', 'November')->count();
    $sales = upload::where('tb_upload.bulan', '=', 'Desember')->count();

    $sales = upload::where('tb_upload.video', '=', 'Desember')->count();


    return view('page.revenue.detailRevenue', [
        "title" => "revenue",
        "user"  => $user,
        "Januari"  => $Januari,
        "Februari"  => $Februari,
        "Maret"  => $Maret,
        "sales"  => $sales,
        "start_date"  => $start_date,
        "end_date"  => $end_date,




    ]);
}
public function published($uuid)
{
    $user = DB::table('tb_upload') //join table users and table user_details base from matched id;
    ->join('type_group', 'tb_upload.id_group', '=', 'type_group.id_group')
    ->find($uuid); //find the record matched to the current authenticated user's id from the joint table records


        return view('page.dashboard.publish', [
            "title" => "dashboard",
            "user" => $user,
        ]);
    
}
// Publish

public function updated_status(Request $request, $uuid)
{
    $user = upload::find($uuid);

    $input = $request->all();
    $request->validate([
        'status' => 'required',
        'platform' => 'required',
        'published_date' => 'required',
        'publish_link' => 'required',

    ]);

    $user->update([

        $user->status = $input['status'],
        $user->platform = implode(',', $input['platform']),
        $user->published_date = $input['published_date'],
        $user->publish_link = $input['publish_link'],

    ]);
    return redirect('/')->with('success', 'Berhasil Diubah!');  


}

//update position
public function posisi()
{
    
        return view('page.position.index', [
            "title" => "position",
            "user" => jabatan::get()


        ]);

    
}

public function tambah_posisi(Request $request)
{
    $input = $request->all();
    $user = new jabatan();
    {
        $request->validate([
           'jabatan' => 'required',
           'role' => 'required',
       ]);
           
    $user->jabatan = $input['jabatan'];
    $user->role = $input['role'];
    $user->id_khusus = '1';

   
        $user->save();
   
   return redirect('/position')->with('success', 'Berhasil Ditambahkan!');  
     }
}    




//uploaded 
    public function uploadedd(Request $request)

    {
        $sum = upload::where('tb_upload.name_upload', '=', Auth::user()->name)->count();
        $sem = DB::table('tb_upload')
        ->where('tb_upload.name_upload', '=', auth()->user()->name)
        ->where('tb_upload.status', '=', 'Pending')
        ->count(); 
        $sam = DB::table('tb_upload')
        ->where('tb_upload.name_upload', '=', auth()->user()->name)
        ->where('tb_upload.status', '=', 'Published')
        ->count();
        $som = DB::table('tb_upload')
        ->where('tb_upload.name_upload', '=', auth()->user()->name)
        ->where('tb_upload.status', '=', 'Takedown')
        ->count();

        $som = upload::where('tb_upload.status', '=', 'TakeDown')->count();

        if($request->pending){
            $user = upload::where('tb_upload.status', '=', 'Pending');
        }
        
        $user = DB::table('type_group')
        ->join('tb_upload', 'tb_upload.id_group', '=', 'type_group.id_group')
        ->where('tb_upload.name_upload', '=', Auth::user()->name);

               if($request->roles){
            $user = upload::where('tb_upload.name_upload', '=', auth()->user()->name)
            ->where('bulan',$request->roles);
        }
        if($request->select){
            $user = upload::where('tb_upload.name_upload', '=', auth()->user()->name)
            ->where('id_group',$request->select);
        }
        if($request->statuss){
            $user = upload::where('tb_upload.name_upload', '=', auth()->user()->name)
            ->where('status',$request->statuss);
        }
    
        if($request->search){
            $user = upload::where('tb_upload.name_upload', '=', auth()->user()->name)
            ->where('video_title','LIKE', '%' .$request->search. '%');
        }  
        $perPage = $request->input('perPage', 10);

$user = $user->orderBy('id','ASC')->paginate($perPage);

        return view('page.uploaded.index', [
            "title" => "uploaded",
            "user" => $user,
            "users" => groups::get(),  
            "sum" => $sum,
            "sem" => $sem,
            "sam" => $sam,
            "som" => $som,


        ]);

    }

//Bagian dashbord
    public function dashboard(Request $request)
    {
        $sum = upload::count();
        $sem = upload::where('tb_upload.status', '=', 'Pending')->count();
$sam = upload::where('tb_upload.status', '=', 'Published')->count();
$som = upload::where('tb_upload.status', '=', 'TakeDown')->count();



$user = DB::table('type_group')
->join('tb_upload', 'tb_upload.id_group', '=', 'type_group.id_group');

if($request->roles){
$user = upload::where('bulan',$request->roles);
}
if($request->statuss){
$user = upload::where('status',$request->statuss);
}
if($request->search){
$user = upload::where('video_title','LIKE', '%' .$request->search. '%');
}    
    $perPage = $request->input('perPage', 10);

$user = $user->orderBy('id','ASC')->paginate($perPage);
 return view('page.dashboard.index',  [
    "title" => "dashboard",
    "user" => $user,
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
    $user->published_date = '-';
    $user->publish_link = '-';

    $user->viewer_bulan = '-';
    $user->impression_bulan = '-';
    $user->revenue_bulan = '-';
    $user->revenuedate_bulan = '-';
    $user->viewer_harian = '-';
    $user->impression_harian = '-';
    $user->revenue_harian = '-';
    $user->revenuedate_harian = '-';

        $user->save();
   
   return redirect('/uploaded')->with('success', 'Berhasil Ditambahkan!');  
     }
}





public function editupload($id, tb_user $userr)
{
     
    
   
   
    $users = DB::table('type_jabatan')
    
    ->select('type_jabatan.id_khusus', 'type_jabatan.jabatan', 'type_jabatan.role', 'type_jabatan.jabatan', )
    
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

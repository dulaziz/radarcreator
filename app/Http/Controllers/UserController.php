<?php

namespace App\Http\Controllers;

use App\Models\groups;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use App\Models\jabatan;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $user = DB::table('type_group')
        ->join('users', 'users.id_group', '=', 'type_group.id_group')
        ->join('type_jabatan', 'type_jabatan.id_jabatan', '=', 'users.id_jabatan')
            ->get();
    
        return view('page/user/index', [
            "title" => "user",
            "user" => $user,
    
        ]);   
     }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('page/user/userAdd', [
            "title" => "user",
            "user" => groups::get(),
            "datas" => jabatan::get(),
    
        ]);    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
        ]);    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::findOrfail($id);
        $request->validate([
            'name' => 'required',
            'username' => 'required',
            'id_group' => 'required',
            'email' => 'required',
            'password' => 'required',
            'id_jabatan' => 'required',
            'role' => 'required',
            
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
          
        $user->update($input);
    
        return redirect('/user')->with('success', 'Berhasil Diubah!');  
    }
    public function delete(User $user, $id)
    {
    $delete = User::findOrFail($id);
    Storage::delete('public/posts/'. $user->image);
    
    $delete->delete(); 
    return redirect('/user')->with('success', 'Berhasil Dihapus!');  
        }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, User $user)
    {
        $delete = User::findOrFail($id);
        Storage::delete('public/posts/'. $user->image);
        
        $delete->delete(); 
        return redirect('/user')->with('success', 'Berhasil Dihapus!');  
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
}

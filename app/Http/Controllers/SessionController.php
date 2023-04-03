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
use App\Exports\Revenue;

use App\Models\Tb_total;

use App\Models\tb_user;
use Faker\Provider\UserAgent;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Facades\Excel;
class SessionController extends Controller
{
    public function construct()
    {
        $this->middleware('auth');
    }
    public function getNewData()
    {
        $data = upload::where('created_at', '>', \Carbon\Carbon::now()->subMinutes(5))->get();
        return response()->json($data);
    }
    public function updates(Request $request)
    {

        if ($request->ajax()) {
            Tb_total::find($request->pk)
                ->update([
                    $request->name => $request->value
                ]);
  
            return response()->json(['success' => true]);
        }
    }



    public function exportExcel()
    {
        $nama_file = 'Laporan perbulan'.date('Y-m-d_H-i-s').'.xlsx';
        return Excel::download(new Revenue, $nama_file);
    }
    public function detailIsentif($uuid)
    {
        $name = auth()->user()->name; // Mendapatkan nama pengguna yang sedang login
        $names = explode(", ", $name); 
        $user = DB::table('tb_upload') 
            ->join('type_group', 'tb_upload.id_group', '=', 'type_group.id_group')
          
            ->find($uuid);
            //find the record matched to the current authenticated user's id from the joint table records
            $count = DB::table('tb_upload')
                            ->where(function($query) use ($names) {
                                foreach($names as $name) {
                                    $query->orWhere('name', 'LIKE', '%' . $name . '%');
                                }
                            })
                            ->where('id', $uuid)
                            ->count();
            
            echo "Jumlah pengguna yang memiliki nama yang sama dengan nama pengguna " . $name . " adalah " . $count;

        return view('page.dashboard.detailIsentif', [
            "title" => "dashboard",
            "user" => $user,
        ]);
    }


    public function halaman_videoupdate(Request $request)
    {
        $sum = upload::count();
        $sem = upload::where('tb_upload.status', '=', 'Pending')->count();
        $sam = upload::where('tb_upload.status', '=', 'Published')->count();
        $som = upload::where('tb_upload.status', '=', 'TakeDown')->count();
        $user = DB::table('type_group')
            ->join('tb_upload', 'tb_upload.id_group', '=', 'type_group.id_group')
            ->select('type_group.group', 'tb_upload.video_title', 'tb_upload.updated_at', 'tb_upload.name_upload', 'tb_upload.bulan', 'tb_upload.published_date', 'tb_upload.video',  'tb_upload.id', 'tb_upload.name', 'tb_upload.tanggal', 'tb_upload.status', 'type_group.id_group', 'tb_upload.status', 'tb_upload.platform',   'tb_upload.viewer_bulan', 'tb_upload.impression_bulan', 'tb_upload.revenue_bulan', 'tb_upload.revenuedate_bulan', 'tb_upload.viewer_harian', 'tb_upload.impression_harian', 'tb_upload.revenue_harian', 'tb_upload.revenuedate_harian',);
        $userss = DB::table('activity_log')
        ->select('activity_log.log_name', 'activity_log.description', 'activity_log.subject_type', 'activity_log.created_at');

        if ($request->roles) {
            $user = upload::where('bulan', $request->roles);
        }
        if ($request->statuss) {
            $user = upload::where('status', $request->statuss);
        }
        if ($request->search) {
            $user = upload::where('video_title', 'LIKE', '%' . $request->search . '%');
        }
        if ($request->searchh) {
            $userss = upload::where('video_title', 'LIKE', '%' . $request->searchhh . '%');
        }
        $perPage = $request->input('perPage', 10);

        $user = $user->orderBy('updated_at', 'DESC')->paginate($perPage);

        $Page = $request->input('Page', 10);
        $userss = $userss->orderBy('updated_at', 'DESC')->paginate($Page);



        return view('page.dashboard.videoUpdated', [
            "title" => "video updated",
            "user" => $user,
            "sum" => $sum,
            "userss" => $userss,
            "sem" => $sem,
            "sam" => $sam,
            "som" => $som,
            "users" => groups::get(),

        ]);
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
    public function add_revenues(Request $request, $uuid)
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
        if ($input['revenue_harian'] <= 1500) {
            $harga_barang_dilaravel = (float)$input['revenue_harian']* (float)0.8;
            $harga_barang_lainnya = round((float)$input['revenue_harian'] * (float)0.2 / (float)$input['jumlah']);
            $total_harga_barang = (float)$input['revenue_harian'] + (float)$harga_barang_lainnya;
        } else if ($input['revenue_harian']  <= 2500) {
            $harga_barang_dilaravel = (float)$input['revenue_harian']  * (float)0.7;
            $harga_barang_lainnya = round((float)$input['revenue_harian']  * (float)0.3 / (float) $input['jumlah']);
        
            $total_harga_barang = $harga_barang_dilaravel + $harga_barang_lainnya;
        } else if ($input['revenue_harian']  >= 2501) {
            $harga_barang_dilaravel = (float)$input['revenue_harian'] * (float)0.6;
            $harga_barang_lainnya = round((float)$input['revenue_harian'] * (float)0.4 / (float)$input['jumlah']);
            $total_harga_barang = (float)$input['revenue_harian'] + (float)$harga_barang_lainnya;
        } else {
            $total_harga_barang = $input['revenue_harian'];
        }
        $user->update([

            $user->viewer_bulan = $input['viewer_bulan'],
            $user->impression_bulan = $input['impression_bulan'],
            $user->revenue_bulan = $input['revenue_bulan'],
            $user->revenuedate_bulan = $input['revenuedate_bulan'],
            $user->viewer_harian = $input['viewer_harian'],
            $user->impression_harian = $input['impression_harian'],
            $user->revenue_harian = $input['revenue_harian'],
            $user->revenuedate_harian = $input['revenuedate_harian'],
            $user->jumlah = $input['jumlah'],
            
            $user->isentif =  $harga_barang_lainnya,



        ]);
        return redirect('/revenue')->with('success', 'Berhasil Diubah!');
    }


    public function editRevenue($uuid)
    {
        $user = DB::table('tb_upload') //join table users and table user_details base from matched id;
            ->join('type_group', 'tb_upload.id_group', '=', 'type_group.id_group')
            ->find($uuid); //find the record matched to the current authenticated user's id from the joint table records
     // Gunakan fungsi implode untuk menggabungkan nilai-nilai yang ingin dihitung
     $count = count(explode(',', $user->produksi));

     $start_date = upload::pluck('tanggal')->first();
     $end_date = Carbon::parse($start_date)->addDays(13)->toDateString();
        return view('page.revenue.editRevenue', [
            "title" => "revenue",
            "user"  => $user,
            "start_date"  => $start_date,
            "end_date"  => $end_date,
            "count"  => $count,


        ]);
    }

    public function tambahTotal()
    {
        return view('page.revenue.Total', [
            "title" => "revenue",

        ]);
    }

    public function tambah_total(Request $request)
    {
        $input = $request->all();

        $user = new Tb_total();

        $request->validate([
            'total' => 'required',
            'revenuedate_bulan' => 'required',
    
        ]);

        $user->total = $input['total'];
        $user->tanggal = $input['revenuedate_bulan'];

        $user->save();

        return redirect('/revenue')->with('success', 'Berhasil Ditambahkan!');
    }




    public function tambah_revenue(Request $request)
    {
        
        $input = $request->all();
        $user = new upload();
        $user->id = Str::uuid();
        $request->validate([
            'viewer_bulan' => 'required',
            'impression_bulan' => 'required',
            'revenue_bulan' => 'required',
            'revenuedate_bulan' => 'required',
            'viewer_harian' => 'required',
            'impression_harian' => 'required',
            'revenue_harian.lte:revenue_bulan' => 'Revenue harian tidak boleh lebih dari revenue bulanan !',
             'revenuedate_harian' => 'required',

        ]);
        if ($input['total'] <= 1500) {
            $harga_barang_dilaravel = (float)$input['revenue_harian']* (float)0.8;
            $harga_barang_lainnya = round((float)$input['revenue_harian'] * (float)0.2 / (float)$input['jumlah']);
            $total_harga_barang = (float)$input['revenue_harian'] + (float)$harga_barang_lainnya;
        } else if ($input['total']  <= 2500) {
            $harga_barang_dilaravel = (float)$input['revenue_harian']  * (float)0.7;
            $harga_barang_lainnya = round((float)$input['revenue_harian']  * (float)0.3 / (float) $input['jumlah']);
        
            $total_harga_barang = $harga_barang_dilaravel + $harga_barang_lainnya;
        } else if ($input['total']  >= 2501) {
            $harga_barang_dilaravel = (float)$input['revenue_harian'] * (float)0.6;
            $harga_barang_lainnya = round((float)$input['revenue_harian'] * (float)0.4 / (float)$input['jumlah']);
            $total_harga_barang = (float)$input['revenue_harian'] + (float)$harga_barang_lainnya;
        } else {
            $total_harga_barang = $input['revenue_harian'];
        }

        $user->tanggal = $input['tanggal'];
        $user->id_group = $input['id_group'];
        $user->video_title = $input['video_title'];
        $user->video = $input['video'];
        $user->produksi = $input['produksi'];
        $user->name = $input['name'];
        $user->platform = $input['platform'];
        $user->status = $input['status'];
        $user->bulan = $input['bulan'];
        $user->name_upload = $input['name_upload'];
        $user->gambar = $input['gambar'];
        $user->published_date = $input['published_date'];
        $user->publish_link = $input['publish_link'];


            $user->viewer_bulan = $input['viewer_bulan'];
            $user->impression_bulan = $input['impression_bulan'];
            $user->revenue_bulan = $input['revenue_bulan'];
            $user->revenuedate_bulan = $input['revenuedate_bulan'];
            $user->viewer_harian = $input['viewer_harian'];
            $user->impression_harian = $input['impression_harian'];
            $user->revenue_harian = $input['revenue_harian'];
            $user->revenuedate_harian = $input['revenuedate_harian'];
            $user->jumlah = $input['jumlah'];
            $user->isentif =  $harga_barang_lainnya;
            $user->total = $input['total'];

        $user->save();

        return redirect('/revenue')->with('toast_success', 'Berhasil Ditambahkan!');
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
            'revenue_harian' => 'required|numeric|lte:revenue_bulan',
            'revenuedate_harian' => 'required',
        ],
        [
            'revenue_harian.lte' => 'Revenue harian tidak boleh lebih dari revenue bulanan !',

        ]);
    
        if ($input['total'] <= 1500) {
            $harga_barang_dilaravel = (float)$input['revenue_harian']* (float)0.8;
            $harga_barang_lainnya = round((float)$input['revenue_harian'] * (float)0.2 / (float)$input['jumlah']);
            $total_harga_barang = (float)$input['revenue_harian'] + (float)$harga_barang_lainnya;
        } else if ($input['total']  <= 2500) {
            $harga_barang_dilaravel = (float)$input['revenue_harian']  * (float)0.7;
            $harga_barang_lainnya = round((float)$input['revenue_harian']  * (float)0.3 / (float) $input['jumlah']);
        
            $total_harga_barang = $harga_barang_dilaravel + $harga_barang_lainnya;
        } else if ($input['total']  >= 2501) {
            $harga_barang_dilaravel = (float)$input['revenue_harian'] * (float)0.6;
            $harga_barang_lainnya = round((float)$input['revenue_harian'] * (float)0.4 / (float)$input['jumlah']);
            $total_harga_barang = (float)$input['revenue_harian'] + (float)$harga_barang_lainnya;
        } else {
            $total_harga_barang = $input['revenue_harian'];
        }
        $user->update([

            $user->viewer_bulan = $input['viewer_bulan'],
            $user->impression_bulan = $input['impression_bulan'],
            $user->revenue_bulan = $input['revenue_bulan'],
            $user->revenuedate_bulan = $input['revenuedate_bulan'],
            $user->viewer_harian = $input['viewer_harian'],
            $user->impression_harian = $input['impression_harian'],
            $user->revenue_harian = $input['revenue_harian'],
            $user->revenuedate_harian = $input['revenuedate_harian'],
            $user->jumlah = $input['jumlah'],
            $user->total = $input['total'],
            $user->isentif =  $harga_barang_lainnya,



        ]);
        return redirect('/revenue')->with('success', 'Berhasil Diubah!');
    }


    public function update_revenue(Request $request)
    {
        if ($request->ajax()) {
            User::find($request->pk)
                ->update([
                    $request->name => $request->value
                ]);

            return response()->json(['success' => true]);
        }
    }

    public function revenues(Request $request)
    {
        $bulanSekarang = date('m');
$tahunSekarang = date('Y');

       

                $total = DB::table('tb_upload')
                ->whereMonth('created_at', $bulanSekarang)
                ->whereYear('created_at', $tahunSekarang)
                ->sum('revenue_harian');
                $totala = DB::table('tb_upload')
                ->whereMonth('created_at', $bulanSekarang)
                ->whereYear('created_at', $tahunSekarang)
                ->sum('isentif');
                $totalss = DB::table('tb_upload')
                ->where('tb_upload.name_upload', '=', auth()->user()->name)
                ->whereMonth('created_at', $bulanSekarang)
                ->whereYear('created_at', $tahunSekarang)
                ->sum('isentif');

                $totals = DB::table('tb_total')
                ->select('tb_total.id', 'tb_total.total', 'tb_total.tanggal',)
                ->whereMonth('created_at', $bulanSekarang)
                ->whereYear('created_at', $tahunSekarang);

              
                $name = auth()->user()->name; // Mendapatkan nama pengguna yang sedang login
                $names = explode(", ", $name); // Membagi nama menjadi array dengan memisahkan spasi
                $count = DB::table('tb_upload')
                            ->where(function($query) use ($names) {
                                foreach($names as $name) {
                                    $query->orWhere('name', 'LIKE', '%' . $name . '%');
                                }
                            })
                            ->count();
                
                echo "Jumlah pengguna yang memiliki nama yang sama dengan nama pengguna " . $name . " adalah " . $count;
        $usersss = DB::table('tb_upload')
        ->join('type_group', 'tb_upload.id_group', '=', 'type_group.id_group')
        ->select('type_group.group', 'tb_upload.video_title', 'tb_upload.isentif', 'tb_upload.updated_at', 'tb_upload.published_date',  'tb_upload.id', 'tb_upload.name', 'tb_upload.tanggal', 'tb_upload.status', 'type_group.id_group', 'tb_upload.status', 'tb_upload.platform',   'tb_upload.viewer_bulan', 'tb_upload.impression_bulan', 'tb_upload.revenue_bulan', 'tb_upload.revenuedate_bulan', 'tb_upload.viewer_harian', 'tb_upload.impression_harian', 'tb_upload.revenue_harian', 'tb_upload.revenuedate_harian',)

        ->where(function($query) use ($names) {
            foreach($names as $name) {
                $query->orWhere('name', 'LIKE', '%' . $name . '%');
            }
        })
        ->where(function($query) {
            $query->where('status', 'Takedown')
                  ->orWhere('status', 'Published');
        })
    
        ->whereMonth('tb_upload.created_at', $bulanSekarang);
    
        $tanggalSekarang = Carbon::now()->translatedFormat('F');;
        $user = DB::table('tb_upload')
            ->join('type_group', 'tb_upload.id_group', '=', 'type_group.id_group')
            ->select('type_group.group', 'tb_upload.video_title', 'tb_upload.updated_at', 'tb_upload.name_upload',  'tb_upload.isentif', 'tb_upload.id', 'tb_upload.published_date',  'tb_upload.name', 'tb_upload.tanggal', 'tb_upload.status', 'type_group.id_group', 'tb_upload.status', 'tb_upload.platform',   'tb_upload.viewer_bulan', 'tb_upload.impression_bulan', 'tb_upload.revenue_bulan', 'tb_upload.revenuedate_bulan', 'tb_upload.viewer_harian', 'tb_upload.impression_harian', 'tb_upload.revenue_harian', 'tb_upload.revenuedate_harian',)
            ->where(function($query) {
                $query->where('status', 'Takedown')
                      ->orWhere('status', 'Published');
            })
            ->whereMonth('tb_upload.created_at', $bulanSekarang);

        if ($request->select) {
            $user = upload::where('tb_upload.status', '=', 'Published')
                ->where('id_group', $request->select);
        }

     
        $bulan_sekarang = Carbon::now()->translatedFormat('F');
        $sum = upload::where('tb_upload.name_upload', '=', Auth::user()->name)->count();


        if ($request->search) {
            $user = upload::where(function($query) {
                $query->where('status', 'Takedown')
                      ->orWhere('status', 'Published');
            })

                ->where('video_title', 'LIKE', '%' . $request->search . '%');
                 $tanggalSekarang = Carbon::now()->translatedFormat('F');;
        }
        if ($request->searchs) {
            $usersss = upload::where(function($query) {
                $query->where('status', 'Takedown')
                      ->orWhere('status', 'Published');
            })
                ->where('video_title', 'LIKE', '%' . $request->searchs . '%')
                ->where('tb_upload.name_upload', '=', auth()->user()->name);
               
        }
        if ($request->roles) {
            $user = upload::where(function($query) {
                $query->where('status', 'Takedown')
                      ->orWhere('status', 'Published');
            })
            ->where('bulan',$request->roles);
            $total = $user->sum('revenue_harian');
        }

        
        if ($request->roless) {
            $usersss = upload::where(function($query) {
                $query->where('status', 'Takedown')
                      ->orWhere('status', 'Published');
            })
            ->where('bulan',$request->roless)
            ->where('tb_upload.name_upload', '=', auth()->user()->name);
            $totalss = $usersss->sum('isentif');
           
        }

        if ($request->rolesss) {
            $user = upload::where(function($query) {
                $query->where('status', 'Takedown')
                      ->orWhere('status', 'Published');
            })
            ->where('bulan',$request->roless);

        
            $totala = $user->sum('isentif');
           
        }

        if ($request->names) {
            $user = upload::where(function($query) {
                $query->where('status', 'Takedown')
                      ->orWhere('status', 'Published');
            })
            ->where('name_upload',$request->names)     
            ->whereMonth('tb_upload.created_at', $bulanSekarang);   
            $totala = $user->sum('isentif');
        }
        if ($request->nama_user) {
            $user = upload::where(function($query) {
                $query->where('status', 'Takedown')
                      ->orWhere('status', 'Published');
            })
                ->where('name_upload', $request->nama_user);
        }

        $perPage = $request->input('perPage', 10);


        $user = $user->orderBy('updated_at', 'DESC')->paginate($perPage);
        $usersss = $usersss->orderBy('updated_at', 'DESC')->paginate($perPage);

        $totals = $totals->orderBy('updated_at', 'DESC')->paginate($perPage);



        return view('page.revenue.index', [
            "title" => "revenue",
            "user"  => $user,
            "totala"  => $totala,
            "usersss"  => $usersss,
            "total"  => $total,
            "bulan_sekarang"  => $bulan_sekarang,
            "tanggalSekarang"  => $tanggalSekarang,

            "totals"  => $totals,



            "totalss"  => $totalss,

            "sum"  => $sum,
            "nama_user"  => User::get(),
            "users" => groups::get(),
        ]);
    }
    public function getMonthlyRevenue()
    {
        $revenues = DB::table('tb_upload')
                      ->select(DB::raw('SUM(impression_bulan) as revenues, SUM(revenue_bulan) as revenue, MONTHNAME(created_at) as month'))
                      ->groupBy('month')
                      ->orderByRaw('MONTH(created_at) ASC')
                      ->get();
        return response()->json($revenues);
    }

    
    public function detail_revenue($uuid)
    {
        $user = DB::table('tb_upload') 
            ->join('type_group', 'tb_upload.id_group', '=', 'type_group.id_group')
            ->find($uuid); 
     $count = count(explode(',', $user->produksi));

     $monthlyData = DB::table('tb_upload')
     ->select(DB::raw('YEAR(created_at) year, MONTH(created_at) month, SUM(revenue_bulan) revenue, SUM(impression_bulan) impression, SUM(viewer_bulan) viewer'))
     ->groupBy('year', 'month')
     ->orderBy('year', 'ASC')
     ->orderBy('month', 'ASC')
     ->get();

     
     $bulanSekarang = date('m');
     $tahunSekarang = date('Y');
     $tb_total = DB::table('tb_total')
     ->select('total')
     ->whereMonth('updated_at', $bulanSekarang)
     ->whereYear('updated_at', $tahunSekarang)
     ->get();

     

 $totals = DB::table('tb_upload')
        ->sum('revenue_bulan');
        $start_date = upload::pluck('tanggal')->first();
        $end_date = Carbon::parse($start_date)->addDays(13)->toDateString();

        return view('page.revenue.detailRevenue', [
            "title" => "revenue",
            "user"  => $user,
            "total"  => $tb_total,
            "monthlyData" =>$monthlyData,
            "count"  => $count,
            "start_date"  => $start_date,
            "end_date"  => $end_date,
            "totals"  => $totals,

        ]);
    }
    public function published($uuid)
    {
        $user = DB::table('tb_upload') 
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
        $user = new jabatan(); {
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

        if ($request->pending) {
            $user = upload::where('tb_upload.status', '=', 'Pending');
        }

        $user = DB::table('type_group')
            ->join('tb_upload', 'tb_upload.id_group', '=', 'type_group.id_group')
            ->where('tb_upload.name_upload', '=', Auth::user()->name);

        if ($request->roles) {
            $user = upload::where('tb_upload.name_upload', '=', auth()->user()->name)
                ->where('bulan', $request->roles);
        }
        if ($request->select) {
            $user = upload::where('tb_upload.name_upload', '=', auth()->user()->name)
                ->where('id_group', $request->select);
        }
        if ($request->statuss) {
            $user = upload::where('tb_upload.name_upload', '=', auth()->user()->name)
                ->where('status', $request->statuss);
        }

        if ($request->search) {
            $user = upload::where('tb_upload.name_upload', '=', auth()->user()->name)
                ->where('video_title', 'LIKE', '%' . $request->search . '%');
        }
        $perPage = $request->input('perPage', 10);

        $user = $user->orderBy('id', 'ASC')->paginate($perPage);

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

        if ($request->roles) {
            $user = upload::where('bulan', $request->roles);
        }
        if ($request->statuss) {
            $user = upload::where('status', $request->statuss);
        }
        if ($request->search) {
            $user = upload::where('video_title', 'LIKE', '%' . $request->search . '%');
        }
        $perPage = $request->input('perPage', 10);

        $user = $user->orderBy('id', 'ASC')->paginate($perPage);
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
            Storage::delete('public/posts' . $user->video);

            //update post with new image
            $user->update([

                $user->video     = $image->hashName(),
                $produksi = implode(',', $input['produksi']),
                $name = implode(',', $input['name']),
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
                $produksi = implode(',', $input['produksi']),
                $name = implode(',', $input['name']),
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
        $user->id = Str::uuid();
    
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
            $produksi = implode(',', $input['produksi']);

            $name = implode(',', $input['name']);
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
            $user->isentif = '-';
            $user->jumlah = '-';
            $user->total = '-';



            $user->save();

            return redirect('/uploaded')->with('success', 'Berhasil Ditambahkan!');
        }
    }





    public function editupload($id, tb_user $userr)
    {

        $users = DB::table('type_jabatan')
            ->select('type_jabatan.id_khusus', 'type_jabatan.jabatan', 'type_jabatan.role', 'type_jabatan.jabatan',)
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



    function index()
    {
        return view('page/auth/signIn', [
            "title" => "SignIn"
        ]);
    }
    function user()
    {

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

    function register()
    {

        return view('page/user/userAdd', [
            "title" => "user",
            "user" => groups::get(),

            "datas" => jabatan::get(),

        ]);
    }

    
    public function getData(Request $request)
    {
    $jabatan = $request->input('jabatan');
    $contact = jabatan::where('jabatan', $jabatan)->first();
    if($contact) {
        $role = $contact->role;
    } else {
        $role = null;
   }
         return response()->json([
            'role' => $role,
        ]);
    }

    function login(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'password' => 'required'
        ], [
            'name.required' => 'nama wajib diisi !',
            'password.required' => 'Password wajib diisi !',

        ]);


        if (Auth::attempt(['name' => $request->name, 'password' => $request->password ])) {
            $request->session()->regenerate();
            return redirect()->intended('/');
        } else {
            return back()->withFail('Nama dan Password salah !');
        }
    }



    public function logout()
    {
        Auth::logout();
        Session::flush();

        return redirect('/signIn');
    }

    public function register_action(Request $request)
    {
        $input = $request->all();

        $user = new User();

        $user->id = Str::uuid();
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
        $user->role = $input['role'];

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
            Storage::delete('public/posts' . $user->gambar);

            //update post with new image
            $user->update([

                $user->gambar     = $image->hashName(),
                $user->name = $request->name,
                $user->username = $request->username,
                $user->group = $request->group,
                $user->email = $request->email,
                $user->password = Hash::make($request->password),
                $user->jabatan = $request->jabatan

            ]);
        } else {

            //update post without image
            $user->update([
                $user->name = $request->name,
                $user->username = $request->username,
                $user->group = $request->group,
                $user->email = $request->email,
                $user->password = Hash::make($request->password),
                $user->jabatan = $request->jabatan
            ]);
        }
        return redirect('/user')->with('success', 'Berhasil Diubah!');

    }


    public function delete(User $user, $id)
    {
        $delete = User::findOrFail($id);
        Storage::delete('public/posts/' . $user->image);
        $delete->delete();
        return redirect('/user')->with('success', 'Berhasil Dihapus!');
    }
    public function delete_upload(upload $upload, $id)
    {
        $delete = upload::findOrFail($id);
        Storage::delete('public/posts/' . $upload->image);

        $delete->delete();
        return redirect('/uploaded')->with('success', 'Berhasil Dihapus!');
    }
    public function end(upload $upload, $id)
    {
        $delete = upload::findOrFail($id);
        Storage::delete('public/posts/' . $upload->image);

        $delete->delete();
        return redirect('/videoUpdated')->with('success', 'Berhasil Dihapus!');
    }

}

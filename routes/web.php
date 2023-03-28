<?php

use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/filter', function () {
    return view('page.dashboard.filter', [
        "title" => "dashboard"
    ]);
});

// User




// Upload


// Video Updated


// Uploaded

Route::get('/detail', function () {
    return view('page.uploaded.detail', [
        "title" => "uploaded"
    ]);
});



// Position

Route::group(['middleware' => 'prevent-back-history'],function(){
// Auth
Route::post('/signIn/login', [SessionController::class, 'login']);
Route::post('/userAdd/register_action', [SessionController::class, 'register_action']);
Route::post('/upload/tambah_upload', [SessionController::class, 'tambah_upload']);
Route::post('/position/tambah_posisi', [SessionController::class, 'tambah_posisi']);
Route::post('/editRevenue/{id}/tambah_revenue', [SessionController::class, 'tambah_revenue']);
Route::post('/revenue/updates', [SessionController::class, 'updates']);


Route::put('/addRevenue/add_revenue/{id}', [SessionController::class, 'add_revenue']);
Route::put('//{id}/', [SessionController::class, 'update_status']);
Route::put('/uploaded/update_upload/{id}', [SessionController::class, 'update_upload']);
Route::put('/publish/updated_status/{id}', [SessionController::class, 'updated_status']);

Route::put('/userEdit/update/{tanggal}', [SessionController::class, 'update']);
Route::delete('user/delete/{id}', [SessionController::class, 'delete']);
Route::delete('/uploaded/delete_upload/{id}', [SessionController::class, 'delete_upload']);
Route::delete('/videoUpdated/end/{id}', [SessionController::class, 'end']);



Route::get('/', [SessionController::class, 'dashboard'])->middleware('RedirectIfNotAuthenticated');

Route::get('/uploaded', [SessionController::class, 'uploadedd']);
Route::get('/publish/{id}', [SessionController::class, 'published']);

Route::get('/notification', [SessionController::class, 'getNewData']);


Route::get('/position', [SessionController::class, 'posisi']);

Route::get('/upload', [SessionController::class, 'doalpu']);
Route::get('/reve', [SessionController::class, 'doalpu']);

Route::get('/signIn', [SessionController::class, 'index']);

Route::get('/videoUpdated', [SessionController::class, 'halaman_videoupdate']);

Route::get('user', [SessionController::class, 'user']);
Route::get('/userEdit/{tanggal}', [SessionController::class, 'edit']);
Route::get('/editUpload/{id}', [SessionController::class, 'editupload']);
Route::get('/userAdd', [SessionController::class, 'register']);
Route::get('/userAdd/getData', [SessionController::class, 'getData']);

Route::get('/revenue', [SessionController::class, 'revenues']);


Route::get('/editRevenue/{id}', [SessionController::class, 'editRevenue']);

Route::get('/addRevenue', [SessionController::class, 'halaman_revenue']);
Route::get('/detailRevenue/{id}', [SessionController::class, 'detail_revenue']);
Route::get('/export-excel', [SessionController::class, 'exportExcel']);
           
Route::get('/detailRevenue/{id}/getMonthlyRevenue', [SessionController::class, 'getMonthlyRevenue']);

Route::get('logout', [SessionController::class, 'logout'])->name('logout');
});

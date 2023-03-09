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



// Publish
Route::get('/publish', function () {
    return view('page.dashboard.publish', [
        "title" => "dashboard"
    ]);
});

// Upload


// Video Updated
Route::get('/videoUpdated', function () {
    return view('page.dashboard.videoUpdated', [
        "title" => "video updated"
    ]);
});

// Uploaded

Route::get('/detail', function () {
    return view('page.uploaded.detail', [
        "title" => "uploaded"
    ]);
});

// Revenue
Route::get('/revenue', function () {
    return view('page.revenue.index', [
        "title" => "revenue"
    ]);
});
Route::get('/addRevenue', function () {
    return view('page.revenue.addRevenue', [
        "title" => "revenue"
    ]);
});
Route::get('/detailRevenue', function () {
    return view('page.revenue.detailRevenue', [
        "title" => "revenue"
    ]);
});

// Position


// Auth
Route::post('/signIn/login', [SessionController::class, 'login']);
Route::post('/userAdd/register_action', [SessionController::class, 'register_action']);
Route::post('/upload/tambah_upload', [SessionController::class, 'tambah_upload']);
Route::post('/position/tambah_posisi', [SessionController::class, 'tambah_posisi']);


Route::put('/uploaded/update_upload/{id}', [SessionController::class, 'update_upload']);
Route::put('/userEdit/update/{tanggal}', [SessionController::class, 'update']);
Route::delete('user/delete/{id}', [SessionController::class, 'delete']);
Route::delete('/uploaded/delete_upload/{id}', [SessionController::class, 'delete_upload']);


Route::get('/', [SessionController::class, 'dashboard'])->middleware('RedirectIfNotAuthenticated');

Route::get('/uploaded', [SessionController::class, 'uploadedd']);
Route::get('/position', [SessionController::class, 'posisi']);

Route::get('/upload', [SessionController::class, 'doalpu']);
Route::get('/signIn', [SessionController::class, 'index']);
Route::get('user', [SessionController::class, 'user']);
Route::get('/userEdit/{tanggal}', [SessionController::class, 'edit']);
Route::get('/editUpload/{id}', [SessionController::class, 'editupload']);
Route::get('/userAdd', [SessionController::class, 'register']);
Route::get('logout', [SessionController::class, 'logout'])->name('logout');
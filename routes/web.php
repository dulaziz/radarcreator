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

Route::get('/', function () {
    return view('page.dashboard.index', [
        "title" => "dashboard"
    ]);
});

Route::get('/filter', function () {
    return view('page.dashboard.filter', [
        "title" => "dashboard"
    ]);
});

// User
Route::get('/user', function () {
    return view('page.user.index', [
        "title" => "user"
    ]);
});
Route::get('/userEdit', function () {
    return view('page.user.userEdit', [
        "title" => "user"
    ]);
});


// Publish
Route::get('/publish', function () {
    return view('page.dashboard.publish', [
        "title" => "dashboard"
    ]);
});

// Upload
Route::get('/upload', function () {
    return view('page.upload.index', [
        "title" => "upload"
    ]);
});

// Video Updated
Route::get('/videoUpdated', function () {
    return view('page.dashboard.videoUpdated', [
        "title" => "video updated"
    ]);
});

// Uploaded
Route::get('/uploaded', function () {
    return view('page.uploaded.index', [
        "title" => "uploaded"
    ]);
});
Route::get('/detail', function () {
    return view('page.uploaded.detail', [
        "title" => "uploaded"
    ]);
});
Route::get('/edit', function () {
    return view('page.uploaded.edit', [
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
Route::get('/position', function () {
    return view('page.position.index', [
        "title" => "position"
    ]);
});
Route::get('/formPosition', function () {
    return view('page.position.formPosition', [
        "title" => "form position"
    ]);
});


// Auth
Route::get('/signIn', [SessionController::class, 'index']);
Route::post('/signIn/login', [SessionController::class, 'login']);
Route::post('/userAdd/register_action', [SessionController::class, 'register_action']);
Route::get('/userAdd', [SessionController::class, 'register']);
Route::get('logout', [SessionController::class, 'logout'])->name('logout');

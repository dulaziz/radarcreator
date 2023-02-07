<?php

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
Route::get('/userAdd', function () {
    return view('page.user.userAdd', [
        "title" => "user"
    ]);
});
Route::get('/userDetail', function () {
    return view('page.user.userDetail', [
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

// Auth
Route::get('/signIn', function () {
    return view('page.auth.signIn', [
        "title" => "Sign In"
    ]);
});


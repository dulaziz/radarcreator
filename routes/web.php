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
    return view('dashboard.index', [
        "title" => "dashboard"
    ]);
});

Route::get('/upload', function () {
    return view('page.upload.index', [
        "title" => "upload"
    ]);
});

Route::get('/uploaded', function () {
    return view('page.uploaded.index', [
        "title" => "uploaded"
    ]);
});

Route::get('/allUploadedList', function () {
    return view('page.allUploadedList.index', [
        "title" => "all uploaded"
    ]);
});

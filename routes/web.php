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

Route::get('/myUploadList', function () {
    return view('page.myUploadList.index', [
        "title" => "my upload list"
    ]);
});

Route::get('/allUploadList', function () {
    return view('page.allUploadList.index', [
        "title" => "all upload List"
    ]);
});

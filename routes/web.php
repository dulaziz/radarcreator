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

// Admin
Route::get('/dashboard', function () {
    return view('admin.index', [
        "title" => "dashboard"
    ]);
});

Route::get('/formEdit', function () {
    return view('admin.page.formEdit.index', [
        "title" => "edit"
    ]);
});

Route::get('/dataVideo', function () {
    return view('admin.page.uploaded.index', [
        "title" => "data video"
    ]);
});

Route::get('/formEditDataVideo', function () {
    return view('admin.page.formAfterEdit.index', [
        "title" => "edit data video"
    ]);
});

Route::get('/editUser', function () {
    return view('admin.page.editUser.index', [
        "title" => "edit user"
    ]);
});

Route::get('/detail', function () {
    return view('page.detail.index', [
        "title" => "detail"
    ]);
});

// Auth
Route::get('/signIn', function () {
    return view('auth.signIn', [
        "title" => "Sign In"
    ]);
});

Route::get('/signUp', function () {
    return view('auth.signUp', [
        "title" => "Sign Up"
    ]);
});

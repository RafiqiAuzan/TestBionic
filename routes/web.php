<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('pages.CSSTest');
});

Route::get('/sqltest', function () {
    return view('pages.SqlTest');
});

Route::get('/javascripttest', function () {
    return view('pages.JavascriptTest');
});

Route::get('/jawabanfdang', function () {
    return view('pages.JawabanFdanG');
});

Route::get('/erdtest', function () {
    return view('pages.ErdTest');
});

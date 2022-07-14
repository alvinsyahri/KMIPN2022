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

Route::get('/dashboard', function () {
    return view('dashboard.dashboard');
});

Route::get('/upload', function () {
    return view('dashboard.upload');
});

Route::get('/solusi', function () {
    return view('dashboard.solusi');
});

Route::get('/datasurat', function () {
    return view('dashboard.datasurat');
});

Route::get('/perizinan', function () {
    return view('dashboard.perizinan');
});

Route::get('/laporan', function () {
    return view('dashboard.laporan');
});

Route::get('/createuser', function () {
    return view('dashboard.createuser');
});

Route::get('/datauser', function () {
    return view('dashboard.datauser');
});

Route::get('/tambah', function () {
    return view('dashboard.tambahperangkat');
});

Route::get('/data', function () {
    return view('dashboard.dataperangkat');
});

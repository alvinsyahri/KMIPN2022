<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\DashboardBeritaController;
use App\Http\Controllers\DashboardSolusiController;
use App\Http\Controllers\DashboardDataSuratController;
use App\Http\Controllers\DashboardKategoriController;
use App\Http\Controllers\DashboardLaporanKeuanganController;
use App\Http\Controllers\DashboardPerangkatGampongController;

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

Route::controller(LoginController::class)->group(function () {
    Route::get('/login', 'index')->name('login')->middleware('guest');
    Route::post('/login', 'authenticate');
    Route::post('/logout', 'logout');
});

Route::prefix('/dashboard')->group(function () {

    Route::get('/', function () {
        return view('dashboard.index', [
            'title' => 'Dashboard'
        ]);
    })->middleware('auth');

    
    Route::prefix('/berita')->group(function () {
        Route::get('/berita/checkSlug', [DashboardBeritaController::class, 'checkSlug'])->middleware('auth');
        Route::resource('/data-berita', DashboardBeritaController::class)->middleware('auth');
        
        Route::get('/kategori-berita/createSlug', [DashboardKategoriController::class, 'checkSlug'])->middleware('auth');
        Route::resource('/kategori-berita', DashboardKategoriController::class)->middleware('auth');
    });

    Route::prefix('/administrasi')->group(function () {
        Route::resource('/solusi', DashboardSolusiController::class)->middleware('auth');
        Route::resource('/data-surat', DashboardDataSuratController::class)->middleware('auth');
        Route::get('/perizinan', function () {
            return view('dashboard.perizinan.index',[
                'title' => 'Perizinan Tamu'
            ]);
        })->middleware('auth');
    });

    Route::resource('/laporan-keuangan', DashboardLaporanKeuanganController::class)->middleware('auth');

    Route::resource('/users', AdminUserController::class)->middleware('auth');

    Route::resource('/perangkat-gampong', DashboardPerangkatGampongController::class)->middleware('auth');

});

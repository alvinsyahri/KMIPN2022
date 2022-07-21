<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\DashboardBeritaController;
use App\Http\Controllers\DashboardSolusiController;
use App\Http\Controllers\DashboardDataSuratController;
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

Route::prefix('/dashboard')->group(function () {

    Route::get('/', function () {
        return view('dashboard.index', [
            'title' => 'Dashboard'
        ]);
    });

    Route::resource('/berita', DashboardBeritaController::class);

    Route::prefix('/administrasi')->group(function () {

        Route::resource('/solusi', DashboardSolusiController::class);

        Route::resource('/data-surat', DashboardDataSuratController::class);

        Route::get('/perizinan', function () {
            return view('dashboard.perizinan.index',[
                'title' => 'Perizinan'
            ]);
        });

    });

    Route::resource('/laporan-keuangan', DashboardLaporanKeuanganController::class);

    Route::resource('/users', AdminUserController::class);

    Route::resource('/perangkat-gampong', DashboardPerangkatGampongController::class);

});

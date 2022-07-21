<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardBeritaController;

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
        Route::prefix('/solusi')->group(function () {
            Route::get('/', function () {
                return view('dashboard.solusi.index',[
                    'title' => 'Administrasi'
                ]);
            });
            Route::get('/tambah', function () {
                return view('dashboard.solusi.create',[
                    'title' => 'Administrasi'
                ]);
            });
        });
        Route::prefix('/data-surat')->group(function () {
            Route::get('/', function () {
                return view('dashboard.datasurat.index',[
                    'title' => 'Data Surat'
                ]);
            });
            Route::get('/edit', function () {
                return view('dashboard.datasurat.edit',[
                    'title' => 'Data Surat'
                ]);
            });
        });
        Route::get('/perizinan', function () {
            return view('dashboard.perizinan.index',[
                'title' => 'Perizinan'
            ]);
        });
    });

    Route::prefix('/laporan')->group(function () {
        Route::get('/', function () {
            return view('dashboard.laporan.index',[
                'title' => 'Laporan'
            ]);
        });
        Route::get('/tambah', function () {
            return view('dashboard.laporan.create',[
                'title' => 'Laporan'
            ]);
        });
    });

    Route::prefix('/users')->group(function () {
        Route::get('/', function () {
            return view('dashboard.user.index',[
                'title' => 'Users'
            ]);
        });
        Route::get('/tambah', function () {
            return view('dashboard.user.create',[
                'title' => 'Users'
            ]);
        });
    });

    Route::prefix('/perangkat-gampong')->group(function () {
        Route::get('/', function () {
            return view('dashboard.perangkat.index',[
                'title' => 'Perangkat Gampong'
            ]);
        });
        Route::get('/tambah', function () {
            return view('dashboard.perangkat.create',[
                'title' => 'Perangkat Gampong'
            ]);
        });
    });

});

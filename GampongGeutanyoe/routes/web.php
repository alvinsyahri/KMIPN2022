<?php

use App\Models\User;
use App\Models\Berita;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\DashboardBeritaController;
use App\Http\Controllers\DashboardSolusiController;
use App\Http\Controllers\DashboardJabatanController;
use App\Http\Controllers\DashboardKategoriController;
use App\Http\Controllers\DashboardDataSuratController;
use App\Http\Controllers\DashboardLaporanKeuanganController;
use App\Http\Controllers\DashboardPerangkatGampongController;
use App\Http\Controllers\DashboardPerizinanController;

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
    return view('home', [
        'title' => 'Beranda',
        'beritas' => Berita::with('kategori')->latest()->get()
    ]);
});

Route::prefix('/administrasi')->group(function () {
    Route::get('/', function () {
        return view('administrasi', [
            "title" => "Administrasi"
        ]);
    });

    Route::post('/masukan', [DashboardSolusiController::class, 'store']);

    Route::get('/form-adm', function () {
        return view('form_adm', [
            "title" => "Form Administrasi"
        ]);
    });
    
    Route::get('/form-izin', function () {
        return view('form_izin', [
            "title" => "Form Perizinan"
        ]);
    });
});

Route::get('/tentang', function () {
    return view('tentang', [
        "title" => "Tentang"
    ]);
});

Route::get('/keuangan', function () {
    return view('keuangan', [
        "title" => "Keuangan"
    ]);
});

Route::get('/berita', [BeritaController::class, 'index']);
Route::get('berita/{berita:slug}', [BeritaController::class, 'show']);

Route::controller(LoginController::class)->group(function () {
    Route::get('/login', 'index')->name('login')->middleware('guest');
    Route::post('/login', 'authenticate');
    Route::post('/logout', 'logout');
});

// Dashboard
Route::prefix('/dashboard')->group(function () {

    Route::get('/', function () {
        return view('dashboard.index', [
            'title' => 'Dashboard',
            'total_users' => User::count(),
            'total_berita' => Berita::count()
        ]);
    })->middleware('auth');


    Route::prefix('/berita')->group(function () {
        Route::get('/data-berita/checkSlug', [DashboardBeritaController::class, 'checkSlug'])->middleware('auth');
        Route::resource('/data-berita', DashboardBeritaController::class)->middleware('auth');

        Route::get('/kategori-berita/createSlug', [DashboardKategoriController::class, 'checkSlug'])->middleware('auth');
        Route::resource('/kategori-berita', DashboardKategoriController::class)->except(['show', 'edit'])->middleware('auth');
    });

    Route::prefix('/administrasi')->group(function () {
        Route::resource('/solusi', DashboardSolusiController::class)->except(['create', 'store', 'show', 'edit'])->middleware('auth');
        
        Route::resource('/data-surat', DashboardDataSuratController::class)->middleware('auth');
        
        Route::get('/perizinan', [DashboardPerizinanController::class, 'index'])->middleware('auth');
        Route::post('/perizinan', [DashboardPerizinanController::class, 'store'])->middleware('auth');
    });

    Route::resource('/laporan-keuangan', DashboardLaporanKeuanganController::class)->middleware('auth');

    Route::resource('/user', AdminUserController::class)->except('show')->middleware('auth');
    Route::post('/user/reset-password', [AdminUserController::class, 'resetPassword'])->middleware('auth');

    Route::prefix('/struktur')->group(function () {
        Route::resource('/perangkat-gampong', DashboardPerangkatGampongController::class)->except('show')->middleware('auth');
        Route::resource('/jabatan', DashboardJabatanController::class)->except(['create', 'show', 'edit'])->middleware('auth');
    });
});

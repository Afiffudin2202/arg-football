<?php

use App\Models\Team;
use App\Models\Siswa;
use App\Models\Galeri;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DaftarController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\HomeControlller;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\GeneralController;
use App\Http\Controllers\InstitusiController;

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

Route::get('/', [HomeControlller::class, 'index']);
Route::get('/home', [HomeControlller::class, 'index']);
Route::get('/about', [HomeControlller::class, 'about']);

Route::get('u-12', [SiswaController::class, 'getSiswa12']);
Route::get('u-15', [SiswaController::class, 'getSiswa12']);
Route::get('u-19', [SiswaController::class, 'getSiswa12']);
Route::get('u-17', [SiswaController::class, 'getSiswa12']);

Route::get('galeri', [HomeControlller::class, 'galeri']);
Route::get('contact', [HomeControlller::class, 'contact']);
Route::get('daftar', [DaftarController::class, 'index']);
Route::post('daftar', [DaftarController::class, 'store']);
Route::get('konfirmasi_daftar', [DaftarController::class, 'konfirmasiDaftar']);



// Login
route::get('/admin', [AuthController::class, 'login'])->middleware('guest')->name('admin');
Route::post('/admin', [AuthController::class, 'loginAuth'])->name('login-auth');

// Admin
Route::middleware(['auth'])->group(function () {

    route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    route::get('/arg-fa/admin', function () {
        return view('admin.layouts-admin.main');
    });

    route::get('/admin/dashboard', function () {
        $team = Team::all();
        $siswa = Siswa::all();
        return view('admin.dashboard', compact('team', 'siswa'));
    });

    Route::get('admin/pendaftaran', [DaftarController::class, 'dataDaftar']);
    Route::get('admin/pendaftaran-detail/{id}', [DaftarController::class, 'show']);
    Route::delete('admin/pendaftaran/{id}', [DaftarController::class, 'destroy']);
    Route::resource('admin/institusi', InstitusiController::class);
    Route::resource('admin/staff', TeamController::class);
    Route::resource('admin/galeri', GaleriController::class);
    Route::resource('admin/siswa', SiswaController::class);
    Route::resource('admin/general', GeneralController::class);
    // Admin End
});

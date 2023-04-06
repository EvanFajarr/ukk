<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginAdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CetakController;
use App\Http\Controllers\TanggapanController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\DataMasyarakatController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\LokasiController;
use App\Http\Controllers\SaranController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
//login admin



//loginuser
Route::group(['middleware' => 'guest:masyarakat'], function () {
    Route::get('/', [LoginController::class, 'index'])->name('login');
    Route::post('/', [LoginController::class, 'login']);
});


Route::get('/loginPetugas', [LoginAdminController::class, 'index'])->name('loginAdmin');
Route::post('/loginPetugas', [LoginAdminController::class, 'loginPetugas']);




//regist user
Route::get('/login/register', [LoginController::class, 'register']);
Route::post('/login/create', [LoginController::class, 'create']);



Route::group(['middleware' => 'auth:masyarakat'], function () {
    //logout user
    Route::post('/logout', [LoginController::class, 'logout']);

    //saran
    Route::resource('/saran', SaranController::class);

    //home
    Route::resource('/home', HomeController::class);
    Route::get('/detailPengaduan/{id}', [HistoryController::class, 'pengaduan']);

    Route::get('/home/create', [HistoryController::class, 'tampil']);
    // Route::get('/home/{id}/edit', [LokasiController::class, 'edit']);
});
//logout admin dan petugas
Route::post('/logout', [LoginAdminController::class, 'logout']);


Route::group(['middleware' => 'auth:user'], function () {
    //home
    Route::resource('/admin', AdminController::class);
    //taggapan
    Route::get('/tanggapan/{id}', [TanggapanController::class, 'index']);
    Route::post('/tanggapan/{id}', [TanggapanController::class, 'postTanggapan']);

    //cetak
    Route::get('/cetak/{id}', [CetakController::class, 'cetak']);


    //history
    Route::get('/history', [HistoryController::class, 'index']);

    //masyarakt
    Route::resource('/masyarakat', DataMasyarakatController::class);
    //masyarakt
    Route::resource('/petugas', PetugasController::class);
    //lokasi
    Route::resource('/lokasi', LokasiController::class);
});

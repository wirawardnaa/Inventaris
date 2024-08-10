<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LaporanController;


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
    return view('login');
});

// Ini Route login
Route::post('/login',[LoginController::class, 'login']);

// Ini Route mengarahkan Jika Login Berhasil
Route::get('/admin', [AdminController::class,'admin']);
Route::get('/admin/barang', [AdminController::class,'barang']);


Route::get('/admin/barang/tambah/', [AdminController::class,'tambah_barang']);


Route::get('/admin/barang/edit/{id}', [AdminController::class,'edit_barang']);
Route::get('/admin/barang/delete/{id}', [AdminController::class,'delete_barang']);

Route::post('/admin/barang/simpan', [AdminController::class,'simpan_barang']);
Route::post('/admin/barang/update/{id}', [AdminController::class,'update_barang']);

Route::get('/admin/laporan', [LaporanController::class,'index']); // halaman laporan
Route::get('/admin/laporan/barang', [LaporanController::class,'cetak_barang']); // halaman laporan

Route::get('/kasir', function () {
    return view('layouts.master');
});


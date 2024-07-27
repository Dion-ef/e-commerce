<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
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

Route::get('/user', [App\Http\Controllers\LoginController::class, 'index']);
Route::post('/user/validasi', [App\Http\Controllers\LoginController::class, 'validasi']);

//profil admin
Route::get('/dashboard/profil', [App\Http\Controllers\DashboardController::class, 'adminprofil']);
Route::post('/profil/update', [App\Http\Controllers\DashboardController::class, 'profilUpdate']);

//dashboard admin
Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'tampilan']);
Route::get('/dashboard/barang', [App\Http\Controllers\DashboardController::class, 'barang']);
Route::get('/dashboard/kategori', [App\Http\Controllers\KategoriController::class, 'index']);

//kategori admin
Route::get('/kategori/edit/{id}', [App\Http\Controllers\KategoriController::class, 'edit']);
Route::post('/kategori/update', [App\Http\Controllers\KategoriController::class, 'update']);
Route::get('/kategori/hapus/{id}', [App\Http\Controllers\KategoriController::class, 'hapus']);
Route::get('/kategori/tambah', [App\Http\Controllers\KategoriController::class, 'tambah']);
Route::post('/kategori/store', [App\Http\Controllers\KategoriController::class, 'store']);

//barang admin
Route::get('/kategori/barang', [App\Http\Controllers\KategoriController::class, 'kategori']);
Route::get('/barang/tambah', [App\Http\Controllers\KategoriController::class, 'tambahBarang']);
Route::post('/barang/store', [App\Http\Controllers\KategoriController::class, 'barangStore']);
Route::get('/barang/edit/{id}', [App\Http\Controllers\KategoriController::class, 'editBarang']);
Route::post('/barang/update', [App\Http\Controllers\KategoriController::class, 'updateBarang']);
Route::get('/barang/hapus/{id}', [App\Http\Controllers\KategoriController::class, 'hapusBarang']);
//transaksi admin
Route::get('/transaksi', [App\Http\Controllers\PesananController::class, 'barang']);

//customer
Route::get('/dashboard/pembeli', [App\Http\Controllers\DashboardController::class, 'beranda']);
Route::get('/profil/pembeli', [App\Http\Controllers\DashboardController::class, 'profil']);
Route::get('/profil/search', [App\Http\Controllers\DashboardController::class, 'pencarian']);
Route::get('/pesan/{id}', [App\Http\Controllers\PesananController::class, 'index']);
Route::post('/pesanan/{id}', [App\Http\Controllers\PesananController::class, 'pesan']);
Route::get('/pesan/hapus/{id}', [App\Http\Controllers\PesananController::class, 'hapusPesanan']);
Route::get('/riwayat', [App\Http\Controllers\DashboardController::class, 'riwayat']);


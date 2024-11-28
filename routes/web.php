<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MejaController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PelangganController;
use Illuminate\Support\Facades\Route;

Route::get('login',[AuthController::class,'index'])->name('login');
Route::post('login',[AuthController::class,'CekLogin']);

Route::middleware('auth:admin')->group(function() {
    Route::get('/', [AuthController::class,'dashboard'])->name('dashboard');

    // <----------Menu-Makanan----------> //
    Route::get('/menu',[MenuController::class,'index'])->name('menu');
    Route::get('/menu/tambah_data',[MenuController::class,'tambah_data'])->name('menu-tambah-data');
    Route::post('/menu/tambah_data',[MenuController::class,'isi_data']);
    Route::get('/menu/ubah/{id}',[MenuController::class,'ubah_data']);
    Route::post('/menu/ubah/{id}',[MenuController::class,'mengubah_data']);
    Route::get('/menu/hapus/{id}',[MenuController::class,'hapus_data']);
    // <--------End-Menu-Makanan--------> //

    // <--------------Meja--------------> //
    Route::get('/meja',[MejaController::class,'index'])->name('meja');
    Route::get('/meja/tambah_data',[MejaController::class,'tambah_data'])->name('meja-tambah-data');
    Route::post('/meja/tambah_data',[MejaController::class,'isi_data']);
    Route::get('/meja/ubah/{id}',[MejaController::class,'ubah_data']);
    Route::post('/meja/ubah/{id}',[MejaController::class,'mengubah_data']);
    Route::get('/meja/hapus/{id}',[MejaController::class,'hapus_data']);
    // <------------End-Meja------------> //
    
    // <-----------Pelanggan------------> //
    Route::get('/pelanggan',[PelangganController::class,'index'])->name('pelanggan');
    Route::get('/pelanggan/tambah_data',[PelangganController::class,'tambah_data'])->name('pelanggan-tambah-data');
    Route::post('/pelanggan/tambah_data',[PelangganController::class,'isi_data']);
    Route::get('/pelanggan/ubah/{id}',[PelangganController::class,'ubah_data']);
    Route::post('/pelanggan/ubah/{id}',[PelangganController::class,'mengubah_data']);
    Route::get('/pelanggan/hapus/{id}',[PelangganController::class,'hapus_data']);
    // <---------End-Pelanggan----------> //
    
    // <-------------Order--------------> //
    Route::get('/order',[OrderController::class,'index'])->name('order');
    // <-----------End-Order------------> //    
});

Route::get('logout',[AuthController::class,'logout'])->name('logout');

<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('login',[AuthController::class,'index'])->name('login');
Route::post('login',[AuthController::class,'CekLogin']);

Route::middleware('auth:admin')->group(function() {
    Route::get('/', function() {
        return view('dashboard');
    });
});

Route::get('logout',[AuthController::class,'logout'])->name('logout');

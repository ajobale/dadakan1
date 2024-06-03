<?php

use App\Models\Prakerja;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DestinasiController;


Route::get('/', function () {
    return view('home/home');
});


Route::get('/login', [AuthController::class, 'index'])->name('/login');
Route::get('register', [AuthController::class, 'register'])->name('/register');




Route::get('/destinasi', [DestinasiController::class, 'index'])->name('/destinasi');

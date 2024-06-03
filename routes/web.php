<?php

use App\Models\Prakerja;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DestinasiController;

Route::get('/', function () {
    return view('home/home');
});



Route::get('/destinasi', [DestinasiController::class, 'index'])->name('/destinasi');

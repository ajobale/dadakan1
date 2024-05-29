<?php

use App\Models\Prakerja;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrakerjaController;

Route::get('/', function () {
    return view('prakerja/template');
});


Route::get('/prakerja', [PrakerjaController::class, 'index'])->name('/home');
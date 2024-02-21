<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BuatController;
use App\Http\Controllers\SiswaController;

Route::resource('/crud', SiswaController::class);
Route::get('/create', [BuatController::class, 'index']);
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CVController;

Route::get('/', [CVController::class, 'index'])->name('cv.index');
Route::get('/cv', [CVController::class, 'index'])->name('cv.index');
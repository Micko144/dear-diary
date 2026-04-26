<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemoryController;

Route::get('/', [MemoryController::class, 'home'])->name('home');
Route::get('/about', function () {
    return view('about');
})->name('about');
Route::resource('memories', MemoryController::class);
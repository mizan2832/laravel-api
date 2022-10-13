<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\PracticeController;


Auth::routes();



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

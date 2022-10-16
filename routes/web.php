<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\PracticeController;







Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

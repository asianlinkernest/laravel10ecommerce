<?php

use App\Http\Controllers\AppController;
use Illuminate\Support\Facades\Route;

Route::get('/',[AppController::class,'index'])->name('app.index');

Auth::routes();

Route::get('/home', [app\Http\Controllers\HomeController::class, 'index'])->name('home');


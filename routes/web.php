<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PhoneController;
use App\Http\Controllers\CategoryController;

Route::get('/category/{id}', [CategoryController::class, 'show'])->name('category');


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/list', [PhoneController::class, 'index'])->name('list');
Route::get('/detail/{id}', [PhoneController::class, 'show'])->name('detail');

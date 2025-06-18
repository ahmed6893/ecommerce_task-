<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;

Route::get('/', [DashboardController::class,'index']) ->name('dashboard');

Route::resource('category',     CategoryController::class);
Route::resource('product',      ProductController::class);

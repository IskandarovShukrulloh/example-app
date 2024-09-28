<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/products', [ProductsController::class, 'index']);

Route::resource('/teacher', TeacherController::class);

Route::resource('/posts', PostController::class);

<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PostController;
use Illuminate\Support\Facades\Route;



/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::resource('post', PostController::class)->names('post');
Route::resource('category', CategoryController::class)->names('category');

Route::get('/', [DashboardController::class, 'index'])->name('index');
Route::get('/file-manager', [DashboardController::class, 'file_manager'])->name('file-manager');

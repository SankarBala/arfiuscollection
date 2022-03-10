<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CommentController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
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

Route::get('/', [DashboardController::class, 'index'])->name('index');
Route::get('/file-manager', [DashboardController::class, 'file_manager'])->name('file-manager');
Route::get('/subscription', [DashboardController::class, 'subscription'])->name('subscription');

Route::put('/status/{post}', [PostController::class, 'update_status'])->name('post.update-status');
Route::resource('/post', PostController::class)->names('post');
Route::resource('/category', CategoryController::class)->names('category');
Route::resource('/comment', CommentController::class)->names('comment');

Route::resource('/role', RoleController::class);
Route::resource('/permission', PermissionController::class);
Route::resource('/user', UserController::class);

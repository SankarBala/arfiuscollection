<?php

use App\Http\Controllers\BaseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [BaseController::class, 'index'])->name('index');
Route::get('/category', [BaseController::class, 'category'])->name('category');
Route::get('/categories', [BaseController::class, 'categories'])->name('categories');
Route::get('/post', [BaseController::class, 'post'])->name('post');
Route::get('/search', [BaseController::class, 'search'])->name('search');
Route::get('/contact-us', [BaseController::class, 'contactUs'])->name('contact');
Route::get('/about-us', [BaseController::class, 'aboutUs'])->name('about');
Route::post('subscription', [BaseController::class, 'subscription'])->name('subscription');

Auth::routes();

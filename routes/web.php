<?php

use App\Http\Controllers\BaseController;
use App\Models\Comment;
use App\Models\Post;
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
Route::post('/subscription', [BaseController::class, 'subscription'])->name('subscription');
Route::post('/comment', [BaseController::class, 'comment'])->name('comment-post');

Auth::routes();


// Route::get('/', function () {
//     dd(Comment::find(25)->user->posts[0]->comments);

// });

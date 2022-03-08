<?php

use App\Http\Controllers\BaseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\SocialAuthController;

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
Route::get('/category/{category:slug}', [BaseController::class, 'category'])->name('category');
Route::get('/categories', [BaseController::class, 'categories'])->name('categories');
Route::get('/post/{post:slug}', [BaseController::class, 'post'])->name('post');
Route::get('/search', [BaseController::class, 'search'])->name('search');
Route::get('/contact-us', [BaseController::class, 'contactUs'])->name('contact');
Route::post('/contact-us', [BaseController::class, 'contactRequest'])->name('contact-request');
Route::get('/about-us', [BaseController::class, 'aboutUs'])->name('about');
Route::post('/subscription', [BaseController::class, 'subscription'])->name('subscription');
Route::post('/comment', [BaseController::class, 'comment'])->name('comment-post');
Route::get('/profile', [BaseController::class, 'profile'])->name('profile');
Route::get('/privacy-policies', [BaseController::class, 'privacyPolicies'])->name('privacyPolicies');

Auth::routes();

Route::get('/social-auth/{provider}', [SocialAuthController::class, 'redirectToProvider'])->name('social-auth');
Route::get('/social-auth/{provider}/callback', [SocialAuthController::class, 'handleProviderCallback'])->name('social-auth-callback');



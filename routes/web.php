<?php

use App\Http\Controllers\HomePageController;
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


Route::get('/', [HomePageController::class, 'index'])->name('home');
Route::get('/shop', [HomePageController::class, 'products'])->name('shop');
Route::get('/blog', [HomePageController::class, 'blog'])->name('blog');
Route::get('/blog/show', [HomePageController::class, 'blogShow'])->name('blog.show');
Route::get('/contact', [HomePageController::class, 'contact'])->name('contact');

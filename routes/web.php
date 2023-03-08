<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProgramController;
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

Route::get('/', function () {
    return view('welcome');
});

// Auth::routes();

// Home
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutUsController::class, 'about'])->name('about-us');
Route::get('/product', [ProductController::class, 'product'])->name('product');
Route::get('/program', [ProgramController::class, 'program'])->name('program');

// Product
Route::prefix('/product')->group(function () {
    Route::get('/civil', [ProductController::class, 'civil']);
    Route::get('/power', [ProductController::class, 'power']);
    Route::get('/plumbing', [ProductController::class, 'plumbing']);
});

// News
Route::get('/news', [NewsController::class, 'news'])->name('news');

// Program
Route::prefix('/program')->group(function () {
    Route::get('/reasons', [ProgramController::class, 'reasons']);
    Route::get('/experience', [ProgramController::class, 'experience']);
});

// About
Route::get('/about', [AboutController::class, 'about_us'])->name('about-us');

// Contact
Route::get('/contact', [ContactController::class, 'contact_us'])->name('contact-us');
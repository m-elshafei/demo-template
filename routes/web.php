<?php

use Laravel\Fortify\Fortify;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TestimonialController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/login', function () {
    return view('welcome');
});

Route::resource('/', HomeController::class);
Route::resource('home', HomeController::class);
Route::resource('about', AboutController::class);
Route::resource('blog', BlogController::class);
Route::resource('contact', ContactController::class);
Route::resource('service', ServiceController::class);
Route::resource('testimonial', TestimonialController::class);
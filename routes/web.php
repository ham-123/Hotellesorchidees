<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HotelController;
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
Route::get('/', [HomeController::class, 'index'])->name('accueil');

Route::get('/chambres', [HotelController::class, 'chambre'])->name('chambres');
Route::get('/appartements', [HotelController::class, 'appartements'])->name('appartements');
Route::get('/restaurant', [HotelController::class, 'restaurant'])->name('restaurant');
Route::get('/contact', [HotelController::class, 'contact'])->name('contact');
Route::post('/send-email', [ContactController::class, 'sendEmail'])->name('send.email');
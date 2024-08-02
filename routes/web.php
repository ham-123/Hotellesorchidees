<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\ReservationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomController;

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

Route::get('chambres_classique', [RoomController::class, 'classique'])->name('chambres.classique');
Route::get('chambres_standard', [RoomController::class, 'standard'])->name('chambres.standard');
Route::get('chambres_prestige-de-luxe', [RoomController::class, 'prestigeDeLuxe'])->name('chambres.prestige-de-luxe');
Route::get('chambres_prestige-vue-sur-la-mer', [RoomController::class, 'prestigeVueSurLaMer'])->name('chambres.prestige-vue-sur-la-mer');
Route::get('chambres_suite-vue-sur-la-piscine', [RoomController::class, 'suiteVueSurLaPiscine'])->name('chambres.suite-vue-sur-la-piscine');

Route::post('/reservation', [ReservationController::class, 'store'])->name('reservation.store');

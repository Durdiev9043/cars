<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\UsersController;
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

Route::get('/', [\App\Http\Controllers\BladeController::class,'index'])->name('index');
Route::get('/booking/{id}', [\App\Http\Controllers\BladeController::class,'booking'])->name('booking.create');
Route::post('/store', [\App\Http\Controllers\BladeController::class,'store'])->name('booking.store');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::prefix('admin')->name('admin.')->middleware(['web', 'auth'])->group(function () {
Route::resource('users',UsersController::class);
Route::resource('car',CarController::class);
Route::resource('client',ClientController::class);
Route::resource('booking',BookingController::class);
});


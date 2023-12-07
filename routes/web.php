<?php

use App\Http\Controllers\ConfigController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PhoneController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserLocationController;
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


Route::get('/', [HomeController::class, "index"])->name("home")->middleware('auth');
Route::get('user-location', [UserLocationController::class, 'index']);
Route::resource('orders', OrderController::class)->middleware('auth');
Route::post('step_one', [OrderController::class, 'step_one'])->middleware('auth')->name("step_one");
Route::post('step_two', [OrderController::class, 'step_two'])->middleware('auth')->name("step_two");
Route::post('step_three', [OrderController::class, 'step_three'])->middleware('auth')->name("step_three");
Route::post('step_three', [OrderController::class, 'step_three'])->middleware('auth')->name("step_three");
Route::resource('phones', PhoneController::class);
Route::post('phone-create', [PhoneController::class, 'add_new_phone'])->name("add_new_phone");
Route::post('store_phone', [PhoneController::class, 'store_phone'])->name('store_phone');
Route::get('add_phone', [PhoneController::class, "create_serial_number"])->name("add_phone");
Route::post('search', [PhoneController::class, 'search'])->name("search_serial");
Route::get('about', [ConfigController::class, 'about']);
Route::get('terms', [ConfigController::class, 'terms']);
Route::get('privacy', [ConfigController::class, 'privacy']);
Route::get('profile', [UserController::class, "index"])->name("profile")->middleware('auth');
Route::get('edit-profile', [UserController::class, "edit"])->name("edit-profile")->middleware('auth');
Route::put('update-profile/{user}', [UserController::class, "update"])->name("update-profile")->middleware('auth');

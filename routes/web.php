<?php

use App\Http\Controllers\TestController;

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

Route::get('orders', [TestController::class, 'get_orders']);
Route::get('phone_detail', [TestController::class, 'get_phone_detail']);
Route::get('add_phone', [TestController::class, 'add_phone']);
Route::get('orders', [TestController::class, 'get_orders']);
Route::get('orders', [TestController::class, 'get_orders']);

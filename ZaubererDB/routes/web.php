<?php

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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\TrickController::class, 'index']);
Route::get('/create', [App\Http\Controllers\TrickController::class, 'create']);
Route::post('/store', [App\Http\Controllers\TrickController::class, 'store'])->name('store');

Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'index']);
Route::get('/account', [App\Http\Controllers\AccountController::class, 'index']);
Route::get('/customer', [App\Http\Controllers\CustomerController::class, 'index']);
Route::get('/customer/profile', [App\Http\Controllers\CustomerController::class, 'profile']);




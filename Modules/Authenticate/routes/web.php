<?php

use Illuminate\Support\Facades\Route;
use Modules\Authenticate\Http\Controllers\RegisterController;
use Modules\Authenticate\Http\Controllers\LoginController;
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

Route::group([], function () {
    Route::get('register', [RegisterController::class,'showRegistrationForm'])->name('register');
    Route::post('register',[RegisterController::class,'register']);

    Route::get('login', [LoginController::class,'showLoginForm'])->name('login');
    Route::post('login', [LoginController::class,'login']);
    Route::post('logout', [LoginController::class,'logout'])->name('logout');
});



//Route::prefix('auth')->group(function () {
//
//});


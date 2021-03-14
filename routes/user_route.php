<?php

use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;

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

Route::get('/wellcome', function () {
    return view('menu.landing');
})->name('home');

Route::get('/loginuser', function () {
    return view('menu.loginuser');
})->name('loginuser');

Route::get('/registeruser', function () {
    return view('menu.registeruser');
})->name('registeruser');
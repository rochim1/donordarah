<?php

use App\Http\Controllers\admincontroller;
use App\Http\Controllers\Auth\RegisterController;
use Laravel\Fortify\Http\Controllers\RegisteredUserController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use Laravel\Fortify\Http\Controllers\AuthenticatedSessionController;
use App\Http\Responses\LogoutResponse;
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

// dd(app());
Route::prefix('admin')->name('admin.')->group(function(){

    
    Route::middleware(['checkauthadmin'])->group(function () { 
        Route::view('/login', 'auth.login')->name('login');
        Route::view('/register', 'auth.register')->name('register');
    });
    
    Route::post('/register', [RegisteredUserController::class, 'store'])
    ->middleware(['guest:admin']);
    
    $limiter = config('fortify.limiters.login');

    Route::post('/login', [AuthenticatedSessionController::class, 'store'])
    ->middleware(array_filter([
        'guest:admin',
        $limiter ? 'throttle:' . $limiter : null,
    ]));

    Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
    ->name('logout');

    Route::middleware(['auth:admin'])->group(function () {
        
        Route::get('/', function () {
            return view('admin.index');
        })->name('admin');
        
        Route::get('/webprofile', function () {
            return view('admin.webprofile');
        });
        
        Route::post('/webprofile', [admincontroller::class, 'webprofile']);
    });
});

// Route::view('/logout','auth.login');

// Route::get('/about', function () {
//     return view('menu.learnBlade');
// })->name('about');

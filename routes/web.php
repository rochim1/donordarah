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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('menu.landing');
});
// route untuk lupa password
Route::get('forget-password', [App\Http\Controllers\auth\ForgotPasswordController::class,'getEmail'])->name('forget-password');
Route::post('forget-password', [App\Http\Controllers\auth\ForgotPasswordController::class,'postEmail'])->name('forget-password');
// middleware untuk dasboar hanya bisa di buka oleh verificated user
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/auth/facebook/redirect', function () {
    return Socialite::driver('facebook')->redirect();
});
Route::get('/auth/facebook/callback', function () {
    $user = Socialite::driver('facebook')->user();
    $user->token;
});

Route::get('/auth/github/redirect', function () {
    return Socialite::driver('github')->redirect();
});
Route::get('/auth/github/callback', [RegisterController::class, 'createGithub']);

Route::get('/auth/google/redirect', function () {
    return Socialite::driver('google')->redirect();
});
Route::get('/auth/google/callback', [RegisterController::class, 'createGoogle']);

Route::get('/biodata', function(){
    return view('menu.formbiodata');
});
Route::get('/mail', function(){
    return view('mail.mail');
});

Route::get('/send-mail/{receive}', [RegisterController::class, 'sendmail']);
Route::get('/email-confirmed/{hashed}&email={email}/{status}', function($hashed, $email, $status){
    if ($status == 'accept') {
        // user::where('email', $email)
        // ->where('', $hashed)
        // ->
    }
});
Route::get('/email-confirmed/{hashed}&email={email}/{status}', [RegisterController::class, 'email-confirmed']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



// call Artisan command, make new database
Route::get('/makedatabase/{name}', function ($name) {
    Artisan::call('db:create', ['name' => $name]);
});

// tidak bisa jalan , how to make this run before laravel check the database exists(error handling)
Route::get('/deploy', function () {
    Artisan::call('db:create', ['name' => 'first_rs']);
    Artisan::call('db:create', ['name' => 'news_rs']);
    Artisan::call('db:create', ['name' => 'second_rs']);
    Artisan::call('migrate');
});
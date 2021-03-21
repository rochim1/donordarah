<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\usercontroller;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

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
// passing data from middleware to route/view/conttroller
Route::middleware(['mainVariable'])->group(function(){
    // Route::get('/welcome', [usercontroller::class,'welcome'])->name('home');
    Route::get('/welcome',  function (Request $request, $data) {
        return view('menu.landing', compact('data'));
    })->name('home');

    Route::get('/aboutus', function (Request $request, $data) {
        return view('menu.about', compact('data'));
    })->name('about');
    
    Route::get('/kasus', function (Request $request, $data) {
        return view('menu.kasus', compact('data'));
    })->name('kasus');
    
    Route::get('/event', function (Request $request, $data) {
        return view('menu.event', compact('data'));
    })->name('event');
    
    Route::get('/permohonan', function (Request $request, $data) {
        return view('menu.permohonan', compact('data'));
    })->name('permohonan');
    
    Route::get('/berita', function (Request $request, $data) {
        return view('menu.berita', compact('data'));
    })->name('berita');

    Route::get('/kontak', function (Request $request, $data) {
        return view('menu.kontak', compact('data'));
    })->name('kontak');
    
    Route::get('/berita/{nama}', function (Request $request, $nama ,$data) {
        // parameter nama harus diletakkan setelah parameter data karena parameter nama diproses terlebih dahulu
        // namun parameter hasil dari view ini tidak bisa menampilkan gambar 
        // disebabkan karena url memiliki sub /../../ sehingga pemanggilan gambar harus ../ keluar 1 direktri terlebih dahulu
        
        return view('menu.detail-berita', compact('data'));
    })->name('detailBerita');
    
    Route::get('/permohonan/list/{id}', function (Request $request,$id, $data) {
        return view('menu.listpermohonan', compact('data'));
    })->name('listpermohonan');   
    
    Route::get('/permohonan/list/{id}/edit/{item}', function (Request $request,$id, $item, $data) {
        return view('menu.editpermohonan', compact('data'));
    })->name('listpermohonan');   
});

Route::get('/loginuser', function () {
    return view('menu.loginuser');
})->name('loginuser');

Route::get('/registeruser', function () {
    return view('menu.registeruser');
})->name('registeruser');


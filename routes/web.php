<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[App\Http\Controllers\LandingPageController::class,'index'])->name('landing_page_index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('wilayah')->group(function(){
    Route::resource('datawilayah',\App\Http\Controllers\WilayahController::class);
    Route::resource('tingkatanwilayah',\App\Http\Controllers\TingkatanWilayahController::class);
});

Route::resource('customer',\App\Http\Controllers\CustomerController::class);

Route::resource('pesananmencargo',\App\Http\Controllers\PesananMenCargoController::class);

Route::prefix('pembayaran')->group(function(){
    Route::resource('statuspembayaran',\App\Http\Controllers\StatusPembayaranController::class);
    Route::resource('metodepembayaran',\App\Http\Controllers\MetodePembayaranController::class);
});

Route::resource('statusmanifes',\App\Http\Controllers\StatusManifesController::class);



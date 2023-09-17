<?php

use App\Http\Controllers\Private\CartController;
use App\Http\Controllers\Private\CheckoutController;
use App\Http\Controllers\Private\ChirpController;
use App\Http\Controllers\Private\HomeController;
use App\Http\Controllers\Private\ProductController;
use App\Http\Controllers\Private\ProfileController;
use App\Http\Controllers\Private\ShopController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Private Routes
|--------------------------------------------------------------------------
*/

Route::get('/home', HomeController::class)->name('home');
Route::controller(ShopController::class)->group(function () {
    Route::any('/shop', 'index')->name('shop.index');
});

Route::controller(ProductController::class)->group(function () {
    Route::get('/product/{id}', 'show')->name('product.show');
});


Route::middleware('auth')->group(function () {

    Route::controller(CartController::class)->group(function (){
        Route::post('/cart/add', 'add')->name('cart.add');
        Route::delete('/cart/delete', 'delete')->name('cart.delete');
    });
    Route::controller(CheckoutController::class)->group(function (){
        Route::get('/checkout', 'index')->name('checkout');
    });

    Route::controller(ProfileController::class)->group(function () {
        Route::get('/profile', 'edit')->name('profile.edit');
        Route::patch('/profile', 'update')->name('profile.update');
        Route::delete('/profile', 'destroy')->name('profile.destroy');
    });


    Route::controller(ChirpController::class)->group(function () {
        Route::get('/chirps', 'index')->name('chirps.index');
        Route::get('/chirps/create', 'create')->name('chirps.create');
        Route::post('/chirps', 'store')->name('chirps.store');
        Route::get('/chirps/{chirp}', 'show')->name('chirps.show');
        Route::get('/chirps/{chirp}/edit', 'edit')->name('chirps.edit');
        Route::put('/chirps/{chirp}', 'update')->name('chirps.update');
        Route::delete('/chirps/{chirp}', 'destroy')->name('chirps.destroy');
    });
});

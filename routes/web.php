<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\ShopController;
use App\Http\Controllers\frontend\ProductController;


Route::get('/', [HomeController::class, 'index'])->name('home');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/wishlist', [HomeController::class, 'wishlist'])->name('wishlist');
Route::get('/compare', [HomeController::class, 'compare'])->name('compare');

// shop
Route::get('/shop', [ShopController::class, 'index'])->name('shop');
Route::get('/product/{slug}', [ShopController::class, 'productDetails'])->name('product.details');


Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/contact', [HomeController::class, 'contactUs'])->name('contact.us');



Route::get('/subscriber', [HomeController::class, 'subscribeEmail'])->name('subscriber');

require __DIR__.'/auth.php';

<?php

use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboard\HomeController;
use App\Http\Controllers\dashboard\CategoryController;

Route::middleware('auth')->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [HomeController::class, 'index'])->name('admin.dashboard');

    
    Route::get('/category/index', [CategoryController::class, 'indexCategory'])->name('category.index');
    Route::get('/category/create', [CategoryController::class, 'createCategory'])->name('category.create');

    // brand
    Route::get('/brand/index', [CategoryController::class, 'indexBrand'])->name('brand.index');
    Route::get('/brand/create', [CategoryController::class, 'createBrand'])->name('brand.create');

    
});
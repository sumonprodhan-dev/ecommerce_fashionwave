<?php

use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboard\TagController;
use App\Http\Controllers\dashboard\HomeController;
use App\Http\Controllers\dashboard\BrandController;
use App\Http\Controllers\dashboard\CouponController;
use App\Http\Controllers\dashboard\SliderController;
use App\Http\Controllers\dashboard\GatewayController;
use App\Http\Controllers\dashboard\ProductController;
use App\Http\Controllers\dashboard\CategoryController;
use App\Http\Controllers\dashboard\SettingsController;
use App\Http\Controllers\dashboard\PayGatewayController;
use App\Http\Controllers\dashboard\TestimonialController;
use Ramsey\Collection\Set;

Route::middleware('auth')->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');

    // product
    Route::get('/product/index', [ProductController::class, 'index'])->name('product.index');
    Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');
    Route::post('/product/store', [ProductController::class, 'store'])->name('product.store');
    Route::get('/product/edit/{id}', [ProductController::class, 'edit'])->name('product.edit');
    Route::post('/product/update/{id}', [ProductController::class, 'update'])->name('product.update');
    Route::get('/admin/product/status/{id}', [ProductController::class, 'toggleStatus'])->name('product.status');
    Route::DELETE('/product/delete/{id}', [ProductController::class, 'delete'])->name('product.delete');

    // coupon
    // Route::get('/coupon/index', [CouponController::class, 'index'])->name('coupon.index');
    // Route::get('/coupon/create', [CouponController::class, 'create'])->name('coupon.create');
    // Route::post('/coupon/store', [CouponController::class, 'store'])->name('coupon.store');
    // Route::get('/coupon/edit/{id}', [CouponController::class, 'edit'])->name('coupon.edit');
    // Route::post('/coupon/update/{id}', [CouponController::class, 'update'])->name('coupon.update');
    // Route::get('/coupon/delete/{id}', [CouponController::class, 'delete'])->name('coupon.delete');

    // category
    Route::get('/category/index', [CategoryController::class, 'index'])->name('category.index');
    Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create');
    Route::post('/category/store', [CategoryController::class, 'store'])->name('category.store');
    Route::get('/category/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
    Route::post('/category/update/{id}', [CategoryController::class, 'update'])->name('category.update');
    Route::delete('/category/delete/{id}', [CategoryController::class, 'delete'])->name('category.delete');

    // brand
    Route::get('/brand/index', [BrandController::class, 'index'])->name('brand.index');
    Route::get('/brand/create', [BrandController::class, 'create'])->name('brand.create');
    Route::post('/brand/store', [BrandController::class, 'store'])->name('brand.store');
    Route::get('/brand/edit/{id}', [BrandController::class, 'edit'])->name('brand.edit');
    Route::put('/brand/update/{id}', [BrandController::class, 'update'])->name('brand.update');
    Route::delete('/brand/delete/{id}', [BrandController::class, 'delete'])->name('brand.delete');

    // tag
    Route::get('/tag/index', [TagController::class, 'index'])->name('tag.index');
    Route::get('/tag/create', [TagController::class, 'create'])->name('tag.create');
    Route::post('/tag/store', [TagController::class, 'store'])->name('tag.store');
    Route::get('/tag/edit/{id}', [TagController::class, 'edit'])->name('tag.edit');
    Route::post('/tag/update/{id}', [TagController::class, 'update'])->name('tag.update');
    Route::get('/tag/delete/{id}', [TagController::class, 'delete'])->name('tag.delete');

    // slider
    Route::get('/slider/index', [SliderController::class, 'index'])->name('slider.index');
    Route::get('/slider/create', [SliderController::class, 'create'])->name('slider.create');
    Route::post('/slider/store', [SliderController::class, 'store'])->name('slider.store');
    Route::get('/slider/edit/{id}', [SliderController::class, 'edit'])->name('slider.edit');
    Route::post('/slider/update/{id}', [SliderController::class, 'update'])->name('slider.update');
    Route::get('/slider/delete/{id}', [SliderController::class, 'delete'])->name('slider.destroy');

    // testimonial
    Route::get('/testimonial/index', [TestimonialController::class, 'index'])->name('testimonial.index');
    Route::get('/testimonial/create', [TestimonialController::class, 'create'])->name('testimonial.create');
    Route::post('/testimonial/store', [TestimonialController::class, 'store'])->name('testimonial.store');
    Route::get('/testimonial/edit/{id}', [TestimonialController::class, 'edit'])->name('testimonial.edit');
    Route::post('/testimonial/update/{id}', [TestimonialController::class, 'update'])->name('testimonial.update');
    Route::get('/testimonial/delete/{id}', [TestimonialController::class, 'delete'])->name('testimonial.delete');


    // payment gateway
    Route::get('/gateway', [PayGatewayController::class, 'edit'])->name('gateway.edit');
    Route::put('/gateway/update/{id}', [PayGatewayController::class, 'update'])->name('gateway.update');



    Route::get('/custom-page/{slug}', [SettingsController::class, 'privacyindex'])->name('privacy.index');
    Route::post('/custom-page/{slug}/update', [SettingsController::class, 'privacyUpdate'])->name('privacy.update');


    Route::get('cc', [SettingsController::class, 'cc'])->name('cc');


    
});
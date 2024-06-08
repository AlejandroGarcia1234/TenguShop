<?php

use App\Http\Controllers\Admin\FamilyController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\SubcategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\OptionController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {
        Route::get('/', function () {
            return view('admin.dashboard');
        })->name('dashboard');

        Route::get('options', [OptionController::class, 'index'])->name('options.index');

        Route::resource('families', FamilyController::class);
        Route::resource('categories', CategoryController::class);
        Route::resource('subcategories', SubcategoryController::class);
        Route::resource('products', ProductController::class);
        Route::get('products/{product}/variants/{variant}', [ProductController::class, 'variants'])->name('products.variants')->scopeBindings();
        Route::put('products/{product}/variants/{variant}', [ProductController::class, 'variantsUpdate'])->name('products.variantsUpdate')->scopeBindings();
    });




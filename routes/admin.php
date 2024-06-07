<?php

use App\Http\Controllers\Admin\FamilyController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\SubcategoryController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {
        Route::get('/', function () {
            return view('admin.dashboard');
        })->name('dashboard');

        Route::resource('families', FamilyController::class);

        Route::resource('categories', CategoryController::class);

        Route::resource('subcategories', SubcategoryController::class);
    });



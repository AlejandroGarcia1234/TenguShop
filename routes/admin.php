<?php

use App\Http\Controllers\Admin\FamilyController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:web'])->prefix('admin')->group(function () {
    Route::get('/', function () {
        return view('admin.dashboard');
    })->name('dashboard');

});

Route::resource('families', FamilyController::class);



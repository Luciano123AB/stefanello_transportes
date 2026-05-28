<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::prefix('/')->group(function () {
    Route::controller(MainController::class)->group(function () {
        Route::get('/', 'home')->name('home');
    });
});
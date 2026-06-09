<?php

use App\Http\Controllers\MainController;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Route;

Route::prefix('/')->group(function () {
    Route::controller(MainController::class)->group(function () {
        Route::get('/', 'home')->name('home');
        
        Route::middleware(['auth', 'verified'])->group(function () {
            Route::get('more-informations', 'moreInformations')->name('more.informations');
        });
    });

    Route::fallback(function(): RedirectResponse {
        return redirect()->route('home');
    });
});
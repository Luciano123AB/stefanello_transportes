<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\Update;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Route;

Route::prefix('/')->group(function () {
    Route::controller(MainController::class)->group(function () {
        Route::get('/', 'home')->name('home');
        
        Route::middleware(['auth', 'verified'])->group(function () {
            Route::get('more-informations', 'moreInformations')->name('more.informations');

            Route::get('edit-profile', 'editProfile')->name('edit.profile');            
        });
    });

    Route::controller(Update::class)->group(function () {
        Route::post('image-update', 'imageUpdate')->name('image.update');
        Route::post('data-update', 'dataUpdate')->name('data.update');
        Route::post('password-update', 'passwordUpdate')->name('update.password');
    });

    Route::fallback(function(): RedirectResponse {
        return redirect()->route('home');
    });
});
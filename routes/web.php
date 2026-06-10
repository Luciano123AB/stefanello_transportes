<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\DataUpdate;
use App\Http\Controllers\UserDelete;
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

    Route::controller(DataUpdate::class)->group(function () {
        Route::middleware(['auth', 'verified'])->group(function () {
            Route::post('image-update', 'imageUpdate')->name('image.update');
            Route::post('data-update', 'dataUpdate')->name('data.update');
            Route::post('password-update', 'passwordUpdate')->name('update.password');
        });
    });

    Route::controller(UserDelete::class)->group(function () {
        Route::middleware(['auth', 'verified'])->group(function () {
            Route::get('confirm-delete', 'confirmDelete')->name('confirm.delete');
            Route::delete('delete/{id}', 'delete')->name('delete');
        });
    });

    Route::fallback(function(): RedirectResponse {
        return redirect()->route('home');
    });
});
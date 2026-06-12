<?php

use App\Http\Controllers\Archives;
use App\Http\Controllers\MainController;
use App\Http\Controllers\DataUpdate;
use App\Http\Controllers\UserDelete;
use App\Http\Middleware\IsAdmin;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Route;

Route::prefix('/')->group(function () {
    Route::controller(MainController::class)->group(function () {
        Route::get('/', 'home')->name('home');
        
        Route::middleware(['auth', 'verified'])->group(function () {
            Route::get('more-informations', 'moreInformations')->name('more.informations');

            Route::get('edit-profile', 'editProfile')->name('edit.profile');

            Route::middleware([IsAdmin::class])->group(function () {  
                Route::get('file-list', 'fileList')->name('file.list');
            });
        });
    });

    Route::controller(DataUpdate::class)->group(function () {
        Route::middleware(['auth', 'verified'])->group(function () {
            Route::post('image-update', 'imageUpdate')->name('image.update');
            Route::post('data-update', 'dataUpdate')->name('data.update');
            Route::post('password-update', 'passwordUpdate')->name('update.password');
            Route::post('contacts-update', 'contactsUpdate')->name('contacts.update');
        });
    });

    Route::controller(UserDelete::class)->group(function () {
        Route::middleware(['auth'])->group(function () {
            Route::get('confirm-delete', 'confirmDelete')->name('confirm.delete');
            Route::delete('delete/{id}', 'delete')->name('delete');
        });
    });

    Route::controller(Archives::class)->group(function () {
        Route::middleware(['auth', 'verified', IsAdmin::class])->group(function () {            
            Route::post('file-upload', 'fileUpload')->name('file.upload');
            Route::get('file-view/{name}', 'fileView')->name('file.view');
            Route::get('file-download/{name}', 'fileDownload')->name('file.download');
            Route::delete('file-delete/{name}', 'fileDelete')->name('file.delete');
        });
    });

    Route::fallback(function(): RedirectResponse {
        return redirect()->route('home');
    });
});
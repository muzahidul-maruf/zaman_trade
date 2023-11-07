<?php

use App\Http\Controllers\admin\MasterController as AdminMasterController;
use App\Http\Controllers\Frontend\MasterController;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;




Route::get('/', [MasterController::class, 'index'])->name('home_page');
Route::get('/about-us', [MasterController::class, 'about_us'])->name('about_us_page');



Route::group(['prefix' => '/services'], function () {
    Route::get('/seed-processing', [MasterController::class, 'seed_processing'])->name('seed-processing');
    Route::get('/seed-packing', [MasterController::class, 'seed_packaging'])->name('seed-packaging');
    Route::get('/transport', [MasterController::class, 'transport'])->name('transport');
    Route::get('/seed-laboratory', [MasterController::class, 'seed_laboratory'])->name('seed-laboratory');
    Route::get('/seed-storage', [MasterController::class, 'seed_storage'])->name('seed-storage');
});

Route::get('/clients', [MasterController::class, 'clients'])->name('clients');
Route::get('/contact', [MasterController::class, 'contact'])->name('contact');
Route::get('/gallery', [MasterController::class, 'gallery'])->name('gallery');


Route::post('/message', [MasterController::class, 'message_store'])->name('message-store');

Route::group(['prefix' => '/admin'], function () {
    Route::get('/login', [AdminMasterController::class, 'loginPage'])->name('admin.login-page');
    Route::post('/login', [AdminMasterController::class, 'login'])->name('admin.login');

    Route::group(['middleware' => 'admin_auth'], function () {
        Route::get('/', [AdminMasterController::class, 'index'])->name('admin.dashboard');
        Route::get('/logout', [AdminMasterController::class, 'logout'])->name('admin.logout');

        Route::group(['prefix' => '/messages'], function () {
            Route::get('/', [AdminMasterController::class, 'all_message'])->name('admin.messages');
            Route::get('/destroy/{id}', [AdminMasterController::class, 'destroy'])->name('admin.messages.destroy');
        });
    });
});
Route::get('/gen-pass', function () {
    dd(Hash::make('askco@21#'));
});
//admin mail info@askco.com
//admin pass askco@21#
<?php

use App\Http\Controllers\admin\MasterController as AdminMasterController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Frontend\MasterController;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;




Route::get('/', [MasterController::class, 'index'])->name('home_page');
Route::get('/about-us', [MasterController::class, 'about_us'])->name('about_us_page');

Route::group(['prefix' => 'products'], function () {
    Route::get('/', [MasterController::class, 'allProduct'])->name('all-products');
    Route::get('/details/{id}', [MasterController::class, 'productDetails'])->name('productDetails');
});

Route::get('/clients', [MasterController::class, 'clients'])->name('clients');
Route::get('/contact', [MasterController::class, 'contact'])->name('contact');


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
        Route::group(['prefix' => '/products'], function () {
            Route::get('/', [ProductController::class, 'index'])->name('admin.products.index');
            Route::get('/create', [ProductController::class, 'create'])->name('admin.products.create');
            Route::post('/store', [ProductController::class, 'store'])->name('admin.products.store');
            Route::get('/edit/{id}', [ProductController::class, 'edit'])->name('admin.products.edit');
            Route::put('/update/{id}', [ProductController::class, 'update'])->name('admin.products.update');
            Route::get('/destroy/{id}', [ProductController::class, 'destroy'])->name('admin.products.destroy');
        });
    });
});
Route::get('/gen-pass', function () {
    dd(Hash::make('zaman@21#'));
});
//admin mail info@zamantrade.com
//admin pass zaman@21#
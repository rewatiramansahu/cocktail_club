<?php

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\Auth\LoginController;


Route::group(['as' => 'admin.', 'middleware' => ['guest']], function() {
    Route::get('/login', [LoginController::class, 'showLogin'])->name('signin');
    Route::post('/login', [LoginController::class, 'authenticate'])->name('authenticate');
});

Route::group(['middleware' => ['preventBackHistory', 'auth']], function() {
    Route::post('/logout', [LoginController::class, 'logout'])->name('admin.logout');
    Route::get('/home', [HomeController::class, 'home'])->name('admin.dashboard');

   
    Route::resource('/categories', CategoryController::class);
    

});

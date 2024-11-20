<?php

use App\Http\Controllers\JadwalController;
use App\Http\Middleware\IsAdmin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware([IsAdmin::class])->group(function () {
    Route::group(['prefix' => 'admin'], function () {
        Route::group(['prefix' => 'jadwal'], function () {
            Route::get('/index', [JadwalController::class, 'index'])->name('admin.index.jadwal');

        });
    });
});


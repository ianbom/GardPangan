<?php

use App\Http\Controllers\DonasiController;
use App\Http\Controllers\DonaturController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RelawanController;
use App\Http\Middleware\IsAdmin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware([IsAdmin::class])->group(function () {
    Route::group(['prefix' => 'admin'], function () {

        Route::get('/', [ProfileController::class, 'index'])->name('admin.profile');
        Route::put('/update-profile', [ProfileController::class, 'update'])->name('update.profile');

        Route::group(['prefix' => 'jadwal'], function () {
            Route::get('/index', [JadwalController::class, 'index'])->name('admin.index.jadwal');
            Route::get('/data', [JadwalController::class, 'getData'])->name('admin.jadwal.data');
            Route::get('/create', [JadwalController::class, 'create'])->name('admin.create.jadwal');
            Route::post('/store', [JadwalController::class, 'store'])->name('admin.store.jadwal');
            Route::get('/edit/{id}', [JadwalController::class, 'edit'])->name('admin.edit.jadwal');
            Route::put('/update/{id}', [JadwalController::class, 'update'])->name('admin.update.jadwal');
            Route::delete('/delete/{id}', [JadwalController::class, 'delete'])->name('admin.delete.jadwal');
            Route::get('/create/relawan/{id}', [JadwalController::class, 'createRelawan'])->name('admin.create.relawan');
            Route::get('/index/relawan/{id}', [JadwalController::class, 'indexRelawan'])->name('admin.index.relawan');
            Route::put('/block/relawan/{id}', [JadwalController::class, 'blockRelawan'])->name('admin.block.relawan');
        });

        Route::group(['prefix' => 'relawan'], function () {
            Route::get('/index', [RelawanController::class, 'index'])->name('admin.relawan.index');
            Route::get('/data', [RelawanController::class, 'getRelawanData'])->name('admin.relawan.data');
            Route::get('/create', [RelawanController::class, 'create'])->name('admin.relawan.create');
            Route::post('/store', [RelawanController::class, 'store'])->name('admin.relawan.store');
            Route::delete('/delete/{id}', [RelawanController::class, 'delete'])->name('admin.relawan.delete');
        });

        Route::get('/donatur/index', [DonaturController::class, 'indexDonatur'])->name('admin.donatur.index');
        Route::resource('donasi', DonasiController::class);
    });
});

    Route::post('/store/relawan/{id}', [JadwalController::class, 'storeRelawan'])->name('store.relawan');
    Route::get('/', [RelawanController::class, 'homeUser'])->name('user.home');

    Route::get('/home/donatur', [DonaturController::class, 'homeDonatur'])->name('donatur.home');
    Route::post('/store/donatur/{id}', [DonaturController::class, 'donaturStore'])->name('donatur.store');
    Route::get('/show/donatur/{id}', [DonaturController::class, 'donasiShow'])->name('donatur.show');


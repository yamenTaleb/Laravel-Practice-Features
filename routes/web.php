<?php

use App\Http\Controllers\FeatureController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

Route::name('front.')->group(function () {
    Route::view('/', 'front.index')->name('index');
    Route::view('/about', 'front.about')->name('about');
    Route::view('/service', 'front.service')->name('service');
    Route::view('/contact', 'front.contact')->name('contact');
})->middleware('auth');

Route::name('admin.')->prefix(LaravelLocalization::setlocale() . '/admin')
    ->middleware([ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ])
    ->group( function () {
    Route::middleware('auth')->group( function () {
        // ================================== Admin Home
        Route::view('/', 'admin.index')->name('index');
        // ================================== Services
        Route::controller(ServiceController::class)->group(function () {
           Route::resource('services', ServiceController::class);
        });
        // ================================== Features
        Route::controller(FeatureController::class)->group(function () {
            Route::resource('features', FeatureController::class);
        });
    });

});

require __DIR__.'/auth.php';
//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');
//
//Route::middleware('auth')->group(function () {
//    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
//});


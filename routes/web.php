<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::name('front.')->group(function () {
    Route::view('/', 'front.index')->name('index');
    Route::view('/about', 'front.about')->name('about');
    Route::view('/service', 'front.service')->name('service');
    Route::view('/contact', 'front.contact')->name('contact');
})->middleware('auth');

Route::name('admin.')->prefix('/admin')->group(callback: function () {
    Route::middleware('auth')->group(function () {
        Route::view('/', 'admin.index')->name('index');
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

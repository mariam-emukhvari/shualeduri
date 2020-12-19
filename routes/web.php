<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index']);
Route::get('/movies/{id}', [\App\Http\Controllers\HomeController::class, 'singleMovieIndex'])->name('singleMovieIndex');


Route::get('/admin', [\App\Http\Controllers\AdminController::class, 'index'])->name('admin');
Route::post('/admin', [\App\Http\Controllers\AdminController::class, 'store'])->name('store');
Route::get('/admin/genre', [\App\Http\Controllers\AdminController::class, 'genreIndex'])->name('genre');
Route::post('/admin/genre', [\App\Http\Controllers\AdminController::class, 'storeGenre']);

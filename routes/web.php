<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CarController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('/cars', [CarController::class, 'index'])->name('cars.view');
    Route::get('/sellerDb', [CarController::class, 'sellerDb'])->name('cars.sellerDb');
    Route::get('/cars/create', [CarController::class, 'create_step1'])->name('cars.create.step1');
    Route::post('/cars/create/step2', [CarController::class, 'create_step2'])->name('cars.create.step2');
    Route::post('/cars/store', [CarController::class, 'store'])->name('cars');
    Route::get('/cars/{car}/edit', [CarController::class, 'edit'])->name('cars.edit');
    Route::post('/cars/{car}/update', [CarController::class, 'update'])->name('cars.update');
    Route::delete('/cars/{car}/destroy', [CarController::class, 'destroy'])->name('cars.destroy');
});

require __DIR__.'/auth.php';

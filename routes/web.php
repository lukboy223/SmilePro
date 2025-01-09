<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AvailabilityController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// availability routes (index)
Route::get('/availabilities', [AvailabilityController::class, 'index'])->name('availability.index');
// Beschikbaarheid toevoegen
Route::get('/availabilities/create', [AvailabilityController::class, 'create'])->name('availability.create');
Route::post('/availabilities', [AvailabilityController::class, 'store'])->name('availability.store');






Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

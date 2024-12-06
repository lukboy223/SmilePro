<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AvailabilityController;
use App\Http\Controllers\CommunicationController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
// Beschikbaarheid view (laat de beschikbaarheid table te zien in de browser (alleen voor de admin))
Route::get('/availability', [AvailabilityController::class, 'index'])->name('availability.index');

// Birechten view (laat de birechten table te zien in de browser (alleen voor de admin))
Route::get('/communication', [CommunicationController::class, 'index'])->name('communication.index');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

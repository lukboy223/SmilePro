<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PatientController;
use Illuminate\Support\Facades\Route;

// Route for the home page
Route::get('/', function () {
    return view('home');
});

// Route for patients resource
Route::resource('patients', PatientController::class);

// Route for the dashboard, accessible only to authenticated and verified users
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Group of routes that require authentication
Route::middleware('auth')->group(function () {
    // Route to display the profile edit form
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    
    // Route to update the profile
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    
    // Route to delete the profile
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Include authentication routes
require __DIR__.'/auth.php';
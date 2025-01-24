<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AvailabilityController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Middleware\CheckAdmin;
use Illuminate\Container\Attributes\Auth;
use App\Http\Controllers\UserController;


// availability routes (index)
Route::get('/availabilities', [AvailabilityController::class, 'index'])->name('availability.index');
// Beschikbaarheid toevoegen
Route::get('/availabilities/create', [AvailabilityController::class, 'create'])->name('availability.create');
Route::post('/availabilities', [AvailabilityController::class, 'store'])->name('availability.store');
// Beschikbaarheid bewerken
Route::get('/availabilities/{availability}/edit', [AvailabilityController::class, 'edit'])->name('availability.edit');
Route::put('/availabilities/{availability}/update', [AvailabilityController::class, 'update'])->name('availability.update');
// Beschikbaarheid verwijderen
Route::delete('/availabilities/{availability}/destroy', [AvailabilityController::class, 'destroy'])->name('availability.destroy');

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

route::get('/about', function () {
    return view('about');
});

 Route::get('/home', [HomeController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/admin', function () {
    return view('admin.adminhome');
})->middleware(['auth', 'verified', CheckAdmin::class])->name('admin');


Route::get('/user/index', [UserController::class, 'index'])->middleware(['auth', 'verified', CheckAdmin::class])->name('user.index');
Route::get('/user/edit/{id}', [UserController::class, 'edit'])->middleware(['auth', 'verified', CheckAdmin::class])->name('user.edit');
Route::patch('/user/update/{id}', [UserController::class, 'update'])->middleware(['auth', 'verified', CheckAdmin::class])->name('user.update');
Route::delete('/user/destroy/{id}', [UserController::class, 'destroy'])->middleware(['auth', 'verified', CheckAdmin::class])->name('user.destroy');

require __DIR__ . '/auth.php';
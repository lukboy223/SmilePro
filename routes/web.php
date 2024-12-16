<?php

use App\Http\Controllers\employeeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TreatmentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/EmployeeView', [employeeController::class, 'index'])->name('employee.index');

Route::get('/TreatmentView', [TreatmentController::class, 'index'])->name('treatment.index');

require __DIR__.'/auth.php';

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

Route::get('/Employee/View', [employeeController::class, 'index'])->name('employee.index');

Route::get('/Employee/Create', [employeeController::class, 'create'])->name('employee.create');
Route::post('/Employee/Store', [employeeController::class, 'store'])->name('employee.store');

Route::get('/Employee/Edit/{id}', [employeeController::class, 'edit'])->name('employee.edit');
Route::patch('/Employee/Update/{id}', [employeeController::class, 'update'])->name('employee.update');

Route::delete('/Employee/Destroy/{id}', [employeeController::class, 'destroy'])->name('employee.destroy');


Route::get('/TreatmentView', [TreatmentController::class, 'index'])->name('treatment.index');

require __DIR__ . '/auth.php';

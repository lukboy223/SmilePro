<?php

use App\Http\Controllers\employeeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TreatmentController;
use App\Http\Controllers\AvailabilityController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PatientController;
use App\Http\Middleware\CheckAdmin;
use Illuminate\Container\Attributes\Auth;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StatiekController;
use App\Http\Middleware\CheckEmployee;


Route::resource('patients', PatientController::class);

// werkt
Route::get('/availabilities', [AvailabilityController::class, 'index'])->middleware(['auth', 'verified', CheckAdmin::class])->name('availability.index');
Route::get('/availabilities/create', [AvailabilityController::class, 'create'])->middleware(['auth', 'verified', CheckAdmin::class])->name('availability.create');
Route::post('/availabilities', [AvailabilityController::class, 'store'])->middleware(['auth', 'verified', CheckAdmin::class])->name('availability.store');
Route::get('/availabilities/{availability}/edit', [AvailabilityController::class, 'edit'])->middleware(['auth', 'verified', CheckAdmin::class])->name('availability.edit');
Route::put('/availabilities/{availability}/update', [AvailabilityController::class, 'update'])->middleware(['auth', 'verified', CheckAdmin::class])->name('availability.update');
Route::delete('/availabilities/{availability}/destroy', [AvailabilityController::class, 'destroy'])->middleware(['auth', 'verified', CheckAdmin::class])->name('availability.destroy');

// werkt
Route::get('/statistieken/index', [StatiekController::class, 'index'])->middleware(['auth', 'verified', CheckAdmin::class])->name('statistieken.index');

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
    Route::get('/profile', [ProfileController::class, 'edit'])->middleware(['auth', 'verified', CheckAdmin::class])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->middleware(['auth', 'verified', CheckAdmin::class])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->middleware(['auth', 'verified', CheckAdmin::class])->name('profile.destroy');
});

Route::get('/admin', function () {
    return view('admin.adminhome');
})->middleware(['auth', 'verified', CheckAdmin::class
])->name('admin');

Route::get('/EmployeeView', [employeeController::class, 'index'])->middleware(['auth', 'verified', CheckAdmin::class])->name('employee.index');
Route::get('/Employee/View', [employeeController::class, 'index'])->name('employee.index');

Route::get('/Employee/Create', [employeeController::class, 'create'])->name('employee.create');
Route::post('/Employee/Store', [employeeController::class, 'store'])->name('employee.store');

Route::get('/Employee/Edit/{id}', [employeeController::class, 'edit'])->name('employee.edit');
Route::patch('/Employee/Update/{id}', [employeeController::class, 'update'])->name('employee.update');

Route::delete('/Employee/Destroy/{id}', [employeeController::class, 'destroy'])->name('employee.destroy');


// werkt
Route::get('/treatment/index', [TreatmentController::class, 'index'])->middleware(['auth', 'verified', CheckAdmin::class])->name('treatment.index');
Route::get('/treatment/create', [TreatmentController::class, 'create'])->middleware(['auth', 'verified', CheckAdmin::class])->name('treatment.create');
Route::post('/treatment/store', [TreatmentController::class, 'store'])->middleware(['auth', 'verified', CheckAdmin::class])->name('treatment.store');
Route::get('/treatment/edit/{id}', [TreatmentController::class, 'edit'])->middleware(['auth', 'verified', CheckAdmin::class])->name('treatment.edit');
Route::patch('/treatment/update/{id}', [TreatmentController::class, 'update'])->middleware(['auth', 'verified', CheckAdmin::class])->name('treatment.update');
Route::delete('/treatment/destroy/{id}', [TreatmentController::class, 'destroy'])->middleware(['auth', 'verified', CheckAdmin::class])->name('treatment.destroy');


// werkt
Route::get('/user/index', [UserController::class, 'index'])->middleware(['auth', 'verified', CheckAdmin::class])->name('user.index');
Route::get('/user/edit/{id}', [UserController::class, 'edit'])->middleware(['auth', 'verified', CheckAdmin::class])->name('user.edit');
Route::patch('/user/update/{id}', [UserController::class, 'update'])->middleware(['auth', 'verified', CheckAdmin::class])->name('user.update');
Route::delete('/user/destroy/{id}', [UserController::class, 'destroy'])->middleware(['auth', 'verified', CheckAdmin::class])->name('user.destroy');







require __DIR__ . '/auth.php';
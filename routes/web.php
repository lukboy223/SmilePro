<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Middleware\CheckAdmin;
use Illuminate\Container\Attributes\Auth;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StatiekController;

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

// route::get('/adminpage', [HomeController::class, 'page']);

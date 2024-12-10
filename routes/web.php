<?php
    
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;


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
Route::resource('admin', AdminController::class);
Route::get('/admin/index', [AdminController::class, 'index'])->name('admin.index')->middleware('auth');
Route::get('/admin/show', [AdminController::class, 'show'])->name('admin.show')->middleware('auth');
Route::get('/admin/edit', [AdminController::class, 'edit'])->name('admin.edit')->middleware('auth');
Route::get('/admin/create', [AdminController::class, 'create'])->name('admin.create')->middleware('auth');
Route::get('/admin/store', [AdminController::class, 'store'])->name('admin.store')->middleware('auth');
Route::get('/admin/update', [AdminController::class, 'update'])->name('admin.update')->middleware('auth');

require __DIR__.'/auth.php';



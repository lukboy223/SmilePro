<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommunicationController;

Route::get('/', function () {
    return view('welcome');
});

// availability routes (index)
Route::get('/communications', [CommunicationController::class, 'index'])->name('communication.index');

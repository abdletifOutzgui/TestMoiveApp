<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilmsController;

Route::redirect('/', 'login');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::resource('films', FilmsController::class);
});

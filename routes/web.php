<?php

use App\Http\Controllers\CustomerFileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('home.dashboard');
})->name('dashboard');

Route::prefix('customer-files')->name('customer-files')->group(function () {

    Route::get('/', [CustomerFileController::class, 'index'])->name('index');
});

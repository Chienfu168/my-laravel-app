<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReportController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::get('/export-pdf', [ReportController::class, 'export'])->name('export.pdf');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


use App\Http\Controllers\AccountController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\PettyCashController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\TripController;

Route::resource('accounts', AccountController::class);
Route::resource('projects', ProjectController::class);
Route::resource('petty-cash', PettyCashController::class);
Route::resource('transactions', TransactionController::class);
Route::resource('trips', TripController::class);

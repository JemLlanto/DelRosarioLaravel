<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

// INDEX PAGE ROUTES
Route::get('/', function () {
    return view('indexPage');
});



// USER PAGE ROUTES
Route::get('/dashboard', function () {
    return view('PageUser.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/classes', function () {
    return view('PageUser.classList');
})->middleware(['auth', 'verified'])->name('classList');

Route::get('/classes/add', function () {
    return view('PageUser.addClass');
})->middleware(['auth', 'verified'])->name('addClass');

Route::get('/attendance', function () {
    return view('PageUser.attendance');
})->middleware(['auth', 'verified'])->name('attendance');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



// ADMIN PAGE ROUTES
route::get('/admin/Home', [HomeController::class, 'index'])->middleware(['auth', 'admin']);


require __DIR__ . '/auth.php';


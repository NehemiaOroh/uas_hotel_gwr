<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

use App\Http\Controllers\RoomController;
use App\Http\Controllers\BookingController;

Route::prefix('admin')->group(function () {
    Route::resource('rooms', RoomController::class);
    Route::resource('bookings', BookingController::class);
});

route::get('/pagerooms', function(){
    return view('pagerooms');
});

route::get('facilities', function(){
    return view('facilities');
});

require __DIR__.'/auth.php';

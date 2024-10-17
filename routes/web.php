<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AccountController;


// Login
Route::get('/', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.submit');


// Content
Route::middleware(['check.auth'])->group(function () {
    Route::get('/landing-page', [ReservationController::class, 'landingPage'])->name('landing-page');

    // Reservation
    Route::get('/reservations', [ReservationController::class, 'index'])->name('reservations.index');
    Route::get('/reservations/create', [ReservationController::class, 'create'])->name('reservations.create');
    Route::post('/reservations', [ReservationController::class, 'store'])->name('reservations.store');
    Route::get('/reservations/{id}', [ReservationController::class, 'show'])->name('reservations.show');
    Route::get('/reservations/{id}/edit', [ReservationController::class, 'edit'])->name('reservations.edit');
    Route::put('/reservations/{id}', [ReservationController::class, 'update'])->name('reservations.update');
    Route::delete('/reservations/{id}', [ReservationController::class, 'destroy'])->name('reservations.destroy');

    // Account
    Route::get('/manage-account', [AccountController::class, 'index'])->name('manage-account.index');
    Route::get('/manage-account/{id}/edit', [AccountController::class, 'edit'])->name('manage-account.edit');
    Route::put('/manage-account/{id}', [AccountController::class, 'update'])->name('manage-account.update');
    Route::delete('/manage-account/{id}', [AccountController::class, 'destroy'])->name('manage-account.destroy');
    Route::get('manage-account/create', [AccountController::class, 'create'])->name('manage-account.create');
    Route::post('manage-account', [AccountController::class, 'store'])->name('manage-account.store');


    // Room
    Route::get('/rooms/standard', [RoomController::class, 'standard'])->name('rooms.standard');
    Route::get('/rooms/deluxe', [RoomController::class, 'deluxe'])->name('rooms.deluxe');
    Route::get('/rooms/suite', [RoomController::class, 'suite'])->name('rooms.suite');
});

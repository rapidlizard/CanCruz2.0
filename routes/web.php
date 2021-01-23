<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes([
    'register' => false
]);

Route::prefix('reservations')->group(function () {
    Route::post('/create', [App\Http\Controllers\ReservationController::class, 'store']);
    Route::delete('/{reservation}', [App\Http\Controllers\ReservationController::class, 'delete']);
    Route::patch('/{reservation}', [App\Http\Controllers\ReservationController::class, 'update']);
});

Route::middleware('auth')->group(function () {
    Route::prefix('dashboard')->group(function () {
        Route::get('/', [App\Http\Controllers\DashboardController::class, 'home']);
        Route::prefix('reservations')->group(function () {
            Route::get('/', [App\Http\Controllers\DashboardController::class, 'reservations']);
            Route::get('/create', [App\Http\Controllers\DashboardController::class, 'createReservation']);
            Route::get('/edit/{reservation}', [App\Http\Controllers\DashboardController::class, 'editReservation']);
        });
    });
});


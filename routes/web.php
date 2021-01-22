<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes([
    'register' => false
]);

Route::middleware('auth')->group(function () {
    Route::prefix('dashboard')->group(function () {
        Route::get('/', function () {
            return view('dashboard.home');
        });
        Route::prefix('reservations')->group(function () {
            Route::get('/', function () {
                return view('dashboard.reservation.list');
            });
            Route::get('/create', function () {
                return view('dashboard.reservation.create');
            });
        });
    });
});


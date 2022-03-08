<?php

use Illuminate\Support\Facades\Route;

Route::prefix('/smsir')->name('smsir.')->group(function () {
    Route::prefix('/send')->name('send.')->group(function () {
        Route::get('/bulk', [\Cryptommer\Smsir\Controllers\ViewController::class, 'SendBulk'])->name('bulk');
        Route::post('/bulk', [\Cryptommer\Smsir\Controllers\SendController::class, 'SendBulk']);
    });
    Route::prefix('/report')->name('report.')->group(function () {
        Route::prefix('/received')->name('received.')->group(function () {
            Route::get('/today', [\Cryptommer\Smsir\Controllers\ViewController::class, 'Todayreceived'])->name('today');
        });
        Route::prefix('/sent')->name('sent.')->group(function () {
            Route::get('/today', [\Cryptommer\Smsir\Controllers\ViewController::class, 'TodaySent'])->name('today');
        });
    });
});

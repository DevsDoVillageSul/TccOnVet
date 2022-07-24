<?php

use App\Http\Controllers\Rebanho\LoteController;


Route::group(['prefix' => 'rebanho'], function () {
    Route::group(['prefix' => 'lotes'], function () {
        Route::any('/', [LoteController::class, 'index'])
            ->name('lotes-index')
            ->middleware('checkPermission:17')
        ;
        Route::get('/delete/{id}', [LoteController::class, 'destroy'])
            ->name('lotes-destroy')
            ->middleware('checkPermission:17')
        ;
        Route::get('/create/{id}', [LoteController::class, 'create'])
            ->name('lotes-create')
            ->middleware('checkPermission:17')
        ;
    });
});

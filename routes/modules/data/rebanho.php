<?php

use App\Http\Controllers\Data\Rebanho\LoteController;

Route::group(['prefix' => 'rebanho'], function () {
    Route::group(['prefix' => 'lotes'], function () {
        Route::post('save', [LoteController::class, 'save']);
    });
});

<?php

use App\Http\Controllers\Api\TourPackagesController;
use App\Http\Controllers\Api\DestinationsController;
use App\Http\Controllers\Api\TourAdventuresController;
use App\Http\Controllers\Api\TourEventsController;
use App\Http\Controllers\Api\MessagesController;
use App\Http\Controllers\Api\SlidersController;
use App\Http\Controllers\Api\SettingsController;


Route::prefix('v1')->middleware(['api'])->group(function () {

    // packages
    Route::get('/tour-packages', [TourPackagesController::class, 'index']);
    Route::get('/tour-packages/{slug}/detail', [TourPackagesController::class, 'show']);

    // destinations
    Route::get('/destinations', [DestinationsController::class, 'index']);
    Route::get('/destination/{slug}/detail', [DestinationsController::class, 'show']);

    // adventures
    Route::get('/tour-adventures', [TourAdventuresController::class, 'index']);
    Route::get('/tour-adventures/{slug}/detail', [TourAdventuresController::class, 'show']);

    // events
    Route::get('/tour-events', [TourEventsController::class, 'index']);
    Route::get('/tour-events/{slug}/detail', [TourEventsController::class, 'show']);

    // messages
    Route::post('/messages/store', [MessagesController::class, 'store']);

    // sliders
    Route::get('/sliders', [SlidersController::class, 'index']);
    Route::get('/sliders/{slug}/detail', [SlidersController::class, 'show']);

    // settings
    Route::get('/settings', [SettingsController::class, 'index']);


});





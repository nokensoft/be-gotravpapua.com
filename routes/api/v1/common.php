<?php

use App\Http\Controllers\Api\PackagesController;
use App\Http\Controllers\Api\DestinationsController;
use App\Http\Controllers\Api\AdventuresController;
use App\Http\Controllers\Api\EventsController;
use App\Http\Controllers\Api\MessagesController;
use App\Http\Controllers\Api\SettingsController;


Route::prefix('v1')->middleware(['api'])->group(function () {

    // packages
    Route::get('/packages', [PackagesController::class, 'index']);
    Route::get('/package/{slug}/detail', [PackagesController::class, 'show']);

    // destinations
    Route::get('/destinations', [DestinationsController::class, 'index']);
    Route::get('/destination/{slug}/detail', [DestinationsController::class, 'show']);

    // adventures
    Route::get('/adventures', [AdventuresController::class, 'index']);
    Route::get('/adventures/{slug}/detail', [AdventuresController::class, 'show']);

    // events
    Route::get('/events', [EventsController::class, 'index']);
    Route::get('/event/{slug}/detail', [EventsController::class, 'show']);

    // messages
    Route::post('/messages/store', [MessagesController::class, 'store']);

    // sliders
    Route::get('/sliders', [SlidersController::class, 'index']);
    Route::get('/sliders/{slug}/detail', [SlidersController::class, 'show']);

    // settings
    Route::get('/settings', [SettingsController::class, 'index']);


});





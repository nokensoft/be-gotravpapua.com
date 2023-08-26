<?php

// dashboard CONTROLLERS
use App\Http\Controllers\Dashboard\SettingsController;

use Illuminate\Support\Facades\Route;

/*
    |--------------------------------------------------------------------------
    | settings
    |
    | index
    | draft
    | create
    | store
    | show
    | edit
    | update
    | destroy
    | trash
    | restore
    | delete
    |--------------------------------------------------------------------------
    */
    Route::group(['middleware' => ['role:administrator']], function () { 
    
        Route::controller(SettingsController::class)->group(function(){

            // index
            Route::get('settings','index')->name('dashboard.settings');

            // edit
            Route::get('settings/edit/','edit')->name('dashboard.settings.edit');

            // update
            Route::put('settings/{id}','update')->name('dashboard.settings.update');

        });
    });

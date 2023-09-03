<?php

// dashboard CONTROLLERS
use App\Http\Controllers\dashboard\PackagesController;

use Illuminate\Support\Facades\Route;

    /*
    |--------------------------------------------------------------------------
    | packages
    | index, draft, create, store, show, edit, update, destroy, trash, restore, delete
    |--------------------------------------------------------------------------
    */
    Route::group(['middleware' => ['role:administrator']], function () { 
    
        Route::controller(PackagesController::class)->group(function(){

            // index
            Route::get('packages','index')->name('dashboard.packages');

            // draft
            Route::get('packages/draft','draft')->name('dashboard.packages.draft');

            // create
            Route::get('packages/create','create')->name('dashboard.packages.create');

            // store
            Route::post('packages','store')->name('dashboard.packages.store');

            // show
            Route::get('packages/show/{id}','show')->name('dashboard.packages.show');

            // edit
            Route::get('packages/edit/{id}','edit')->name('dashboard.packages.edit');

            // update
            Route::put('packages/{id}','update')->name('dashboard.packages.update');

            // destroy
            Route::delete('packages/{id}','destroy')->name('dashboard.packages.destroy');

            // trash
            Route::get('packages/trash','trash')->name('dashboard.packages.trash');

            // restore
            Route::post('packages/restore/{id}','restore')->name('dashboard.packages.restore');

            // delete
            Route::delete('packages/delete/{id}','delete')->name('dashboard.packages.delete');

        });
    });

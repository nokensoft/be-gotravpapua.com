<?php

// dashboard CONTROLLERS
use App\Http\Controllers\dashboard\AdventuresController;

use Illuminate\Support\Facades\Route;

    /*
    |--------------------------------------------------------------------------
    | adventures
    | index, draft, create, store, show, edit, update, destroy, trash, restore, delete
    |--------------------------------------------------------------------------
    */
    Route::group(['middleware' => ['role:administrator']], function () { 
    
        Route::controller(adventuresController::class)->group(function(){

            // index
            Route::get('adventures','index')->name('dashboard.adventures');

            // draft
            Route::get('adventures/draft','draft')->name('dashboard.adventures.draft');

            // create
            Route::get('adventures/create','create')->name('dashboard.adventures.create');

            // store
            Route::post('adventures','store')->name('dashboard.adventures.store');

            // show
            Route::get('adventures/show/{id}','show')->name('dashboard.adventures.show');

            // edit
            Route::get('adventures/edit/{id}','edit')->name('dashboard.adventures.edit');

            // update
            Route::put('adventures/{id}','update')->name('dashboard.adventures.update');

            // destroy
            Route::delete('adventures/{id}','destroy')->name('dashboard.adventures.destroy');

            // trash
            Route::get('adventures/trash','trash')->name('dashboard.adventures.trash');

            // restore
            Route::post('adventures/restore/{id}','restore')->name('dashboard.adventures.restore');

            // delete
            Route::delete('adventures/delete/{id}','delete')->name('dashboard.adventures.delete');

        });
    });

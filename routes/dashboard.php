<?php

use Illuminate\Support\Facades\Route;

Route::prefix('dashboard')->middleware('auth')->group(function () {
    
    require_once 'dashboard/settings.php';
    require_once 'dashboard/packages.php';
    // require_once 'dashboard/destinations.php';
    // require_once 'dashboard/adventures.php';
    // require_once 'dashboard/events.php';
    // require_once 'dashboard/inbox.php';
    // require_once 'dashboard/slider.php';
    // require_once 'dashboard/users.php';

});

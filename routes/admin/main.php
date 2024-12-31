<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\MainController;

/*
|--------------------------------------------------------------------------
| Admin Main Routes
|--------------------------------------------------------------------------
*/

Route::controller(MainController::class)->group(function () {
    Route::get('/', 'openBlade')->name('admin.landing');
    Route::get('/page/{cat}/{subcat}', 'openBlade')->name('admin.open');
});

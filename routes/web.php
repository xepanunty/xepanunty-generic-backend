<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

//MARKETING WEB-SITE
Route::get('/', [\App\Http\Controllers\Marketing\MarketingController::class, 'index']);

// OVERRIDE ACTIONS FOR MY BUSSINESS LOGIC
Route::get('register/{package?}', 'Auth\RegisterControllerOverride@showRegistrationForm')->name('backpack.auth.register');
Route::post('register/{package?}', 'Auth\RegisterControllerOverride@register');
Route::get('dashboard', 'AdminControllerOverride@dashboard')->name('backpack.dashboard'); // see latter

if (app('env') == 'production') {

    Route::get("/clean", function() {
        \Illuminate\Support\Facades\Artisan::call('cache:clear');
        \Illuminate\Support\Facades\Artisan::call('route:clear');
        \Illuminate\Support\Facades\Artisan::call('config:clear');
        \Illuminate\Support\Facades\Artisan::call('view:clear');
        return "ALL Cache is cleared";
    });
}
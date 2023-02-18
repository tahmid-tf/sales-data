<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect()->route('login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// ------------------------------------------------------ Panel ------------------------------------------------------

Route::prefix('admin')->middleware('auth')->group(function () {

//    --------------------------- Dashboard ---------------------------

    Route::get('dashboard', [\App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');

//    --------------------------- Dashboard ---------------------------


//    --------------------------- Sales Export ---------------------------

    Route::get('exportData', [\App\Http\Controllers\Admin\DashboardController::class, 'exportData'])->name('exportData');

//    --------------------------- Sales Export ---------------------------

//    --------------------------- logout ---------------------------

    Route::get('log_out', function () {
        \auth()->logout();
        return redirect("/");
    })->name('log_out');

//    --------------------------- logout ---------------------------


});


// ------------------------------------------------------ Panel ------------------------------------------------------


// ------------------------------------------------------ API DATA ------------------------------------------------------

Route::prefix('api')->middleware('auth')->group(function () {

    Route::get('earning', [\App\Http\Controllers\Admin\DashboardController::class, 'earningApi'])->name("earningsAPI");
    Route::get('revenue', [\App\Http\Controllers\Admin\DashboardController::class, 'revenueApi'])->name("revenueAPI");

});

// ------------------------------------------------------ API DATA ------------------------------------------------------

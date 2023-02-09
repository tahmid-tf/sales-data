<?php

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// ------------------------------------------------------ Panel ------------------------------------------------------

Route::prefix('admin')->group(function () {

//    --------------------------- Dashboard ---------------------------

    Route::get('dashboard', [\App\Http\Controllers\Admin\DashboardController::class,'index']);

//    --------------------------- Dashboard ---------------------------


});


// ------------------------------------------------------ Panel ------------------------------------------------------



// ------------------------------------------------------ API DATA ------------------------------------------------------

Route::prefix('api')->group(function () {


    Route::get('earning', [\App\Http\Controllers\Admin\DashboardController::class,'earningApi'])->name("earningsAPI");
    Route::get('revenue', [\App\Http\Controllers\Admin\DashboardController::class,'revenueApi'])->name("revenueAPI");



});


// ------------------------------------------------------ API DATA ------------------------------------------------------

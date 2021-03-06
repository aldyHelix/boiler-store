<?php

use Illuminate\Support\Facades\Route;
use Hexters\Ladmin\Routes\Ladmin;
use App\Http\Controllers\LadminLogableController;

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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Ladmin::route(function() {
    //Route::resource('/withdrawal', WithdrawalController::class); // Example
});

Route::group(['as' => 'system.', 'prefix' => 'system'], function() {
    //Route::resource('/log', LogController::class)->only(['index']);
    Route::resource('/activity', LadminLogableController::class)->only(['index', 'destroy']);
  });

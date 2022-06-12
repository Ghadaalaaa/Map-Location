<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\TestController;
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

Route::get('/',[LocationController::class, 'index']);
Route::post('/store',[LocationController::class, 'store'])->name('store');


// Route::get('/',[TestController::class, 'index']);
// Route::post('/store',[TestController::class, 'store'])->name('location.store');


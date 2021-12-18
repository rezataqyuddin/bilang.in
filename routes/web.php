<?php

use App\Http\Controllers\ReviewController;
use App\Http\Controllers\viewController;
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
    return view('layouts.dashboard');
});
Route::post('/', [ReviewController::class, "store"]);
Route::get('/dashboard', [viewController::class, "dashboard"]);
Route::get('/apidocs', [viewController::class, "apidocs"]);

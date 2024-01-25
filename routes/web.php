<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\HomeController as FrontendHomeController;
use App\Http\Controllers\backend\HomeController as backendHomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


/* $ Admin $ */
Route::get('/', [backendHomeController::class, 'home'])->name('home');

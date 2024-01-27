<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\HomeController as FrontendHomeController;
use App\Http\Controllers\backend\HomeController as backendHomeController;
use App\Http\Controllers\backend\DesktopController as backendDesktopController;

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


/* Desktop Component */
//mothetboard
Route::get('/motherboard', [backendDesktopController::class, 'motherboard'])->name('motherboard');
Route::get('/motherboard-form',[backendDesktopController::class,'motherboardform'])->name('motherboard.form');
Route::post('/motherboard-store',[backendDesktopController::class,'motherboardstore'])->name('motherboard.store');

// //processor
Route::get('/processor', [backendDesktopController::class, 'processor'])->name('processor');
//ram
Route::get('/ram', [backendDesktopController::class, 'ram'])->name('ram');
//optical device
Route::get('/optical', [backendDesktopController::class, 'optical'])->name('optical');
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\HomeController as FrontendHomeController;
use App\Http\Controllers\backend\HomeController as backendHomeController;
use App\Http\Controllers\backend\DesktopController as backendDesktopController;
use App\Http\Controllers\backend\LaptopController as backendLaptopController;

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
//processor
Route::get('/processor', [backendDesktopController::class, 'processor'])->name('processor');
//ram
Route::get('/ram', [backendDesktopController::class, 'ram'])->name('ram');
//optical device
Route::get('/optical', [backendDesktopController::class, 'optical'])->name('optical');
//graphics
Route::get('/graphics', [backendDesktopController::class, 'graphics'])->name('graphics');
//power supply
Route::get('/power_supply', [backendDesktopController::class, 'power_supply'])->name('power_supply');
//casing
Route::get('/casing', [backendDesktopController::class, 'casing'])->name('casing');
//casing fan
Route::get('/casing_fan', [backendDesktopController::class, 'casing_fan'])->name('casing_fan');
//CPU cooler
Route::get('/cpu_cooler', [backendDesktopController::class, 'cpu_cooler'])->name('cpu_cooler');
//keyboard
Route::get('/keyboard', [backendDesktopController::class, 'keyboard'])->name('keyboard');
//mouse
Route::get('/mouse', [backendDesktopController::class, 'mouse'])->name('mouse');
//ups
Route::get('/ups', [backendDesktopController::class, 'ups'])->name('ups');


/* Laptop */
Route::get('/laptop', [backendLaptopController::class, 'laptop'])->name('laptop');
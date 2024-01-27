<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\HomeController as FrontendHomeController;
use App\Http\Controllers\backend\HomeController as backendHomeController;
use App\Http\Controllers\backend\DesktopController as backendDesktopController;
use App\Http\Controllers\backend\MonitorController as backendMonitorController;
use App\Http\Controllers\backend\LaptopController as backendLaptopController;
use App\Http\Controllers\backend\CameraController as backendCameraController;
use App\Http\Controllers\backend\PrinterController as backendPrinterController;
use App\Http\Controllers\backend\SoundController as backendSoundController;
use App\Http\Controllers\backend\HeadphoneController as backendHeadphoneController;
use App\Http\Controllers\backend\RouterController as backendRouterController;
use App\Http\Controllers\backend\WatchController as backendWatchController;
use App\Http\Controllers\backend\GameController as backendGameController;
use App\Http\Controllers\backend\CalculatorController as backendCalculatorController;
use App\Http\Controllers\backend\PenController as backendPenController;
use App\Http\Controllers\backend\CccameraController as backendCccameraController;

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
//graphics
Route::get('/graphics', [backendDesktopController::class, 'graphics'])->name('graphics');
//power supply
Route::get('/power_supply', [backendDesktopController::class, 'power_supply'])->name('power_supply');
//casing
Route::get('/casing', [backendDesktopController::class, 'casing'])->name('casing');
//casing fan
Route::get('/casing_fan', [backendDesktopController::class, 'casing_fan'])->name('casing_fan');
//SSD
Route::get('/ssd', [backendDesktopController::class, 'ssd'])->name('ssd');
//HDD
Route::get('/hdd', [backendDesktopController::class, 'hdd'])->name('hdd');
//CPU cooler
Route::get('/cpu_cooler', [backendDesktopController::class, 'cpu_cooler'])->name('cpu_cooler');
//keyboard
Route::get('/keyboard', [backendDesktopController::class, 'keyboard'])->name('keyboard');
//mouse
Route::get('/mouse', [backendDesktopController::class, 'mouse'])->name('mouse');
//ups
Route::get('/ups', [backendDesktopController::class, 'ups'])->name('ups');


/* Monitor */
Route::get('/monitor', [backendMonitorController::class, 'monitor'])->name('monitor');
/* Laptop */
Route::get('/laptop', [backendLaptopController::class, 'laptop'])->name('laptop');
/* Camera */
Route::get('/camera', [backendCameraController::class, 'camera'])->name('camera');
/* Printer */
Route::get('/printer', [backendPrinterController::class, 'printer'])->name('printer');
/* Sound System */
Route::get('/sound_system', [backendSoundController::class, 'sound_system'])->name('sound_system');
/* Headphone */
Route::get('/headphone', [backendHeadphoneController::class, 'headphone'])->name('headphone');
/* Router */
Route::get('/router', [backendRouterController::class, 'router'])->name('router');
/* Smart watch */
Route::get('/samrt_watch', [backendWatchController::class, 'smart_watch'])->name('smart_watch');
/* game straming */
Route::get('/game_straming', [backendGameController::class, 'game_straming'])->name('game_straming');
/* Calculator */
Route::get('/calculator', [backendCalculatorController::class, 'calculator'])->name('calculator');
/* Digital pen */
Route::get('/digital_pen', [backendPenController::class, 'digital_pen'])->name('digital_pen');
/* CC Camera */
Route::get('/cc_camera', [backendCccameraController::class, 'cc_camera'])->name('cc_camera');

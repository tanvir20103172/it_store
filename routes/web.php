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
Route::get('/processor-form', [backendDesktopController::class, 'processorform'])->name('processor.form');
Route::post('/processor-store', [backendDesktopController::class, 'processorstore'])->name('processor.store');

//ram
Route::get('/ram', [backendDesktopController::class, 'ram'])->name('ram');
Route::get('/ram-form', [backendDesktopController::class, 'ramform'])->name('ram.form');
Route::post('/ram-store', [backendDesktopController::class, 'ramstore'])->name('ram.store');
//optical device
Route::get('/optical', [backendDesktopController::class, 'optical'])->name('optical');
Route::get('/optical-form', [backendDesktopController::class, 'opticalform'])->name('optical.form');
Route::get('/optical-store', [backendDesktopController::class, 'opticalstore'])->name('optical.store');
//graphics
Route::get('/graphics', [backendDesktopController::class, 'graphics'])->name('graphics');
Route::get('/graphics-form', [backendDesktopController::class, 'graphicsform'])->name('graphics.form');
Route::post('/graphics-store', [backendDesktopController::class, 'graphics'])->name('graphics.store');
//power supply
Route::get('/power_supply', [backendDesktopController::class, 'power_supply'])->name('power_supply');
Route::get('/power_supply-form', [backendDesktopController::class, 'power_supplyform'])->name('power_supply.form');
Route::post('/power_supply-store', [backendDesktopController::class, 'power_supplystore'])->name('power_supply.store');
//casing
Route::get('/casing', [backendDesktopController::class, 'casing'])->name('casing');
Route::get('/casing-form', [backendDesktopController::class, 'casingform'])->name('casing.form');
Route::post('/casing-store', [backendDesktopController::class, 'casingstore'])->name('casing.store');
//casing fan
Route::get('/casing_fan', [backendDesktopController::class, 'casing_fan'])->name('casing_fan');
Route::get('/casing_fan-form', [backendDesktopController::class, 'casing_fanform'])->name('casing_fan.form');
Route::post('/casing_fan-store', [backendDesktopController::class, 'casing_fanstore'])->name('casing_fan.store');
//SSD
Route::get('/ssd', [backendDesktopController::class, 'ssd'])->name('ssd');
Route::get('/ssd-form', [backendDesktopController::class, 'ssdform'])->name('ssd.form');
Route::post('/ssd-store', [backendDesktopController::class, 'ssdstore'])->name('ssd.store');
//HDD
Route::get('/hdd', [backendDesktopController::class, 'hdd'])->name('hdd');
Route::get('/hdd-form', [backendDesktopController::class, 'hddform'])->name('hdd.form');
Route::post('/hdd-store', [backendDesktopController::class, 'hddstore'])->name('hdd.store');
//CPU cooler
Route::get('/cpu_cooler', [backendDesktopController::class, 'cpu_cooler'])->name('cpu_cooler');
Route::get('/cpu_cooler-form', [backendDesktopController::class, 'cpu_coolerform'])->name('cpu_cooler.form');
Route::post('/cpu_cooler-store', [backendDesktopController::class, 'cpu_coolerstore'])->name('cpu_cooler.store');
//keyboard
Route::get('/keyboard', [backendDesktopController::class, 'keyboard'])->name('keyboard');
Route::get('/keyboard-form', [backendDesktopController::class, 'keyboardform'])->name('keyboard.form');
Route::get('/keyboard-store', [backendDesktopController::class, 'keyboardstore'])->name('keyboard.store');
//mouse
Route::get('/mouse', [backendDesktopController::class, 'mouse'])->name('mouse');
Route::get('/mouse-form', [backendDesktopController::class, 'mouseform'])->name('mouse.form');
Route::get('/mouse-store', [backendDesktopController::class, 'mousestore'])->name('mouse.store');
//ups
Route::get('/ups', [backendDesktopController::class, 'ups'])->name('ups');
Route::get('/ups-form', [backendDesktopController::class, 'upsform'])->name('ups.form');
Route::get('/ups-store', [backendDesktopController::class, 'upsstore'])->name('ups.store');


/* Monitor */
Route::get('/monitor', [backendMonitorController::class, 'monitor'])->name('monitor');
Route::get('/monitor-form', [backendMonitorController::class, 'monitorform'])->name('monitor.form');
Route::post('/monitor-store', [backendMonitorController::class, 'monitorstore'])->name('monitor.store');
/* Laptop */
Route::get('/laptop', [backendLaptopController::class, 'laptop'])->name('laptop');
Route::get('/laptop-form', [backendLaptopController::class, 'laptopform'])->name('laptop.form');
Route::post('/laptop-store', [backendLaptopController::class, 'laptopstore'])->name('laptop.store');
/* Camera */
Route::get('/camera', [backendCameraController::class, 'camera'])->name('camera');
Route::get('/camera-form', [backendCameraController::class, 'cameraform'])->name('camera.form');
Route::post('/camera-store', [backendCameraController::class, 'camerastore'])->name('camera.store');
/* Printer */
Route::get('/printer', [backendPrinterController::class, 'printer'])->name('printer');
Route::get('/printer-form', [backendPrinterController::class, 'printerform'])->name('printer.form');
Route::post('/printer-store', [backendPrinterController::class, 'printerstore'])->name('printer.store');
/* Sound System */
Route::get('/sound_system', [backendSoundController::class, 'sound_system'])->name('sound_system');
Route::get('/sound_system-form', [backendSoundController::class, 'sound_systemform'])->name('sound_system.form');
Route::post('/sound_system-store', [backendSoundController::class, 'sound_systemstore'])->name('sound_system.store');
/* Headphone */
Route::get('/headphone', [backendHeadphoneController::class, 'headphone'])->name('headphone');
Route::get('/headphone-form', [backendHeadphoneController::class, 'headphoneform'])->name('headphone.form');
Route::post('/headphone-store', [backendHeadphoneController::class, 'headphonestore'])->name('headphone.store');
/* Router */
Route::get('/router', [backendRouterController::class, 'router'])->name('router');
Route::get('/router-form', [backendRouterController::class, 'routerform'])->name('router.form');
Route::post('/router-store', [backendRouterController::class, 'routerstore'])->name('router.store');
/* Smart watch */
Route::get('/samrt_watch', [backendWatchController::class, 'smart_watch'])->name('smart_watch');
Route::get('/samrt_watch-form', [backendWatchController::class, 'smart_watchform'])->name('smart_watch.form');
Route::post('/samrt_watch-store', [backendWatchController::class, 'smart_watchstore'])->name('smart_watch.store');
/* game straming */
Route::get('/game_straming', [backendGameController::class, 'game_straming'])->name('game_straming');
Route::get('/game_straming-form', [backendGameController::class, 'game_stramingform'])->name('game_straming.form');
Route::post('/game_straming-store', [backendGameController::class, 'game_stramingstore'])->name('game_straming.store');
/* Calculator */
Route::get('/calculator', [backendCalculatorController::class, 'calculator'])->name('calculator');
Route::get('/calculator-form', [backendCalculatorController::class, 'calculatorform'])->name('calculator.form');
Route::post('/calculator-store', [backendCalculatorController::class, 'calculatorstore'])->name('calculator.store');
/* Digital pen */
Route::get('/digital_pen', [backendPenController::class, 'digital_pen'])->name('digital_pen');
Route::get('/digital_pen-form', [backendPenController::class, 'digital_penform'])->name('digital_pen.form');
Route::post('/digital_pen-store', [backendPenController::class, 'digital_penstore'])->name('digital_pen.store');
/* CC Camera */
Route::get('/cc_camera', [backendCccameraController::class, 'cc_camera'])->name('cc_camera');
Route::get('/cc_camera-form', [backendCccameraController::class, 'cc_camera-form'])->name('cc_camera.form');
Route::post('/cc_camera-store', [backendCccameraController::class, 'cc_camera-store'])->name('cc_camera.store');
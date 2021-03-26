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
    return view('v_login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/profil', [App\Http\Controllers\ProfilController::class, 'index'])->name('profil');
Route::get('/costumer',[App\Http\Controllers\CostumerController::class, 'costumer'])->name('costumer');
Route::get('/lapproyek',[App\Http\Controllers\LapproyekController::class, 'lapproyek'])->name('lapproyek');
Route::get('/lapprogres',[App\Http\Controllers\LapprogresController::class, 'lapprogres'])->name('lapprogres');
Route::get('/lapgaji',[App\Http\Controllers\LapgajiController::class, 'lapgaji'])->name('lapgaji');
Route::get('/worker',[App\Http\Controllers\WorkerController::class, 'worker'])->name('worker');
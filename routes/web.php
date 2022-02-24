<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\VehicleController;
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

//Route::middleware(['auth:sanctum', 'verified'])->group(function () {
//Route::get('/dashboard', [RouterController::class, 'dashboard'])->name('dashboard');
///});

Route::middleware('throttle:60,1')->group(function () {
    Route::get('/', HomeController::class)->name('index');
    Route::get('/contacto', ContactController::class)->name('contact');
});
// Route::get('vehiculos/seminuevos-usados', [VehicleController::class, 'seminew_used_vehicles'])
//     ->name('seminew-used-vehicles');

Route::middleware('throttle:60,1')->prefix('vehiculos')->group(function () {
    Route::get('/', [VehicleController::class, 'vehicles'])
        ->name('vehicles');

    Route::get('detalle/{id}/{category}', [VehicleController::class, 'show'])
        ->name('detailvehicle');

    Route::get('/seminuevos-usados', [VehicleController::class, 'seminew_used_vehicles'])
        ->name('seminew-used-vehicles');

    Route::get('/nuevos-agencia', [VehicleController::class, 'new_vehicles'])
        ->name('new-vehicles');

    Route::get('/remates', [VehicleController::class, 'cheap_vehicles'])
        ->name('cheap-vehicles');
});

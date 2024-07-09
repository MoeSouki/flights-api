<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FlightController;
use App\Http\Controllers\FlightsController;
use App\Http\Controllers\Api\PassengersController;
use App\Http\Controllers\FlightPassengersController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/passengers', [PassengersController::class, 'index']);
Route::get('/flights', [FlightsController::class, 'index']);
Route::get('/flights/{flight}', [FlightsController::class, 'show']);
<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FlightController;
use App\Http\Controllers\Api\PassengerController;
use App\Http\Controllers\UserAuthenticationController;

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

Route::resource('passengers', PassengerController::class);
Route::resource('flights', FlightController::class);
Route::resource('users', UserController::class);

Route::post('/register', [UserAuthenticationController::class, 'register']);
Route::post('/login', [UserAuthenticationController::class, 'login']);
Route::post('/logout', [UserAuthenticationController::class, 'logout'])
    ->middleware('auth:sanctum');
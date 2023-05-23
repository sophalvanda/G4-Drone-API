<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DroneController;
use App\Http\Controllers\MapController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->group(function(){
    Route::post('/logout',([AuthController::class,'logout']));
    // drone routes
    Route::get('/drones',([DroneController::class,'index']));
    Route::post('/drone',([DroneController::class,'store']));
    Route::get('/drone/{id}',([DroneController::class,'show']));
    Route::get('/dronelocation/{id}',([DroneController::class,'showLocation']));
    // Map routes
    Route::get('/maps',([MapController::class,'index']));
});
// register routes
Route::get('/farmers',([AuthController::class,'getAllFarmers']));
Route::post('/register',([AuthController::class,'register']));
Route::post('/login',([AuthController::class,'login']));





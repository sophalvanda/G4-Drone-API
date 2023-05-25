<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DroneController;
use App\Http\Controllers\FarmController;
use App\Http\Controllers\MapController;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\InstructionController;
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

    /// http://127.0.0.1:8000/api/droneupdate/1
    Route::put('/droneupdate/{id}',([DroneController::class,'update']));
    //
    Route::get('/dronelocation/{id}',([DroneController::class,'showLocation']));
    // Map routes
    Route::get('/maps',([MapController::class,'index']));
    Route::get('/maps/{province_name}/{farm_id}',([MapController::class,'show']));
    // Farm routes
    Route::get('farms',([FarmController::class,'index']));

    // plans routes
    Route::get('/plans',([PlanController::class,'index']));
    Route::post('/plans/plan',([PlanController::class,'store']));

    //insruction routes
    Route::get('/insructions',([InstructionController::class,'index']));
    Route::put('/insruction/{id}',([InstructionController::class,'update']));
});
// register routes
Route::get('/farmers',([AuthController::class,'getAllFarmers']));
Route::post('/register',([AuthController::class,'register']));
Route::post('/login',([AuthController::class,'login']));





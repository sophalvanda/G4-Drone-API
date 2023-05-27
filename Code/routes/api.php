<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DroneController;
use App\Http\Controllers\FarmController;
use App\Http\Controllers\MapController;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\InstructionController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\ProvinceController;
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
    Route::post('/drones',([DroneController::class,'store']));
    Route::get('/drones/{id}',([DroneController::class,'show']));
    Route::put('drones/{id}',([DroneController::class,'updateInstruction']));

    /// http://127.0.0.1:8000/api/droneupdate/1
    Route::put('/droneupdate/{id}',([DroneController::class,'update']));
    //
    Route::get('/drones/{id}/{location_id}',([DroneController::class,'showLocation']));
    // Map routes
    Route::get('/maps',([MapController::class,'index']));
    Route::get('/maps/{province_name}/{farm_id}',([MapController::class,'show']));
    Route::delete('/maps/{province_name}/{farm_id}',([MapController::class,'deleteImageFarm']));
    Route::post('maps/{province_name}/{farm_id}',([MapController::class,'store']));
    // Farm routes
    Route::get('farms',([FarmController::class,'index']));
    Route::post('farms',([FarmController::class,'store']));
    Route::get('farms/{id}',([FarmController::class,'show']));
    Route::put('farms/{id}',([FarmController::class,'update']));
    Route::delete('farms/{id}',([FarmController::class,'destroy']));

    // plans routes
    Route::get('/plans',([PlanController::class,'index']));
    Route::post('/plans/plan',([PlanController::class,'store']));
    Route::get('/plans/{id}',([PlanController::class,'show']));

    //insruction routes
    Route::get('/instructions',([InstructionController::class,'index']));
    Route::post('/instructions',([InstructionController::class,'store']));
    Route::get('/insructions/{id}',([InstructionController::class,'show']));
    Route::put('/instruction/{id}',([InstructionController::class,'update']));
    Route::delete('/instruction/{id}',([InstructionController::class,'destroy']));

    //provinces routes
    Route::post('provinces',([ProvinceController::class,'store']));
    // Location routes
    Route::get('/locations',([LocationController::class,'index']));
    Route::post('/locations',([LocationController::class,'store']));
    Route::get('/locations/{id}',([LocationController::class,'show']));
    Route::put('/locations{id}',([LocationController::class,'update']));
    Route::delete('/locations{id}',([LocationController::class,'destroy']));
});
// register routes
Route::get('/farmers',([AuthController::class,'getAllFarmers']));
Route::post('/register',([AuthController::class,'register']));
Route::post('/login',([AuthController::class,'login']));





<?php

namespace App\Http\Controllers;

use App\Http\Requests\DroneRequest;
use App\Http\Resources\DroneLocationResource;
use App\Http\Resources\DroneResource;
use App\Http\Resources\LocationResource;
use App\Models\Drone;
use App\Models\Instruction;
use App\Models\Location;
use Illuminate\Http\Request;

class DroneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $drone =Drone::all();
        $drone = DroneResource::collection($drone);
        return response()->json(['message'=>'Request successfully!','data'=>$drone]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DroneRequest $request)
    {
        //
        $drone = Drone::drone($request);
        return response()->json(['message'=>'Create successfully!','data'=>$drone]);

    }

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
        $drone = Drone::find($id);
        $drone =new DroneResource($drone);
        return Response()->json(['message'=>'Show successfully!','data'=>$drone],200);

    }
    public function showLocation($id,$location_id)
    {
        $drone = Drone::find($id);
        $location_id = $drone['location_id'];
        $location = Location::find($location_id);
        $location = new LocationResource($location);
        return Response()->json(['message'=>'Show successfully!','data'=>$location],200);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
{
    $validatedData = $request->validate([
        'name' => 'sometimes|required|string',
        'type' => 'sometimes|required|string',
        'battery' => 'sometimes|required|numeric',
        'payload_capacity' => 'sometimes|required|numeric',
        'user_id' => 'sometimes|required|exists:users,id',
        'location_id' => 'sometimes|required|exists:locations,id',
    ]);
    $drone = Drone::find($id);
    $drone->update($validatedData);
    return response()->json(['message' => 'Update successful!', 'data' => $drone], 200);
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Drone $drone)
    {
        //
    }
    public function updateInstruction(Request $request,$id) {
        $drone = Drone::find($id)->instructions;
        $instruction_id = $drone[0]["id"];
        $instruction = Instruction::find($instruction_id);
        $instruction->update($request->all());
        return response()->json(['message' => 'Update successful!','data'=> $instruction],200);
    }
}

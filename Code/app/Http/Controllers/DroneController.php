<?php

namespace App\Http\Controllers;

use App\Models\Drone;
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
        return response()->json(['message'=>'Request successfully!','data'=>$drone]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $drone = Drone::create([
            'name' => request('name'),
            'type' => request('type'),
            'battery' => request('battery'),
            'payload-capacity' => request('payload-capacity'),
            'user_id' => request('user_id'),
            'location_id' => request('location_id'),
        ]);
        
        return response()->json(['message'=>'Create successfully!','data'=>$drone]);

    }

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
        $drone = Drone::find($id);
        return Response()->json(['message'=>'Show successfully!','data'=>$drone],200);

    }
    public function showLocation($id)
    {
        $drone = Drone::with('location')->get();
        return Response()->json(['message'=>'Show successfully!','data'=>$drone],200);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Drone $drone)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Drone $drone)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\LocationRequest;
use App\Http\Resources\LocationResource;
use App\Models\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $location = Location::all();
        $location = LocationResource::collection($location);
        return $location;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(LocationRequest $request)
    {
        $location = Location::createLocation($request);
        return response()->json(['Massage'=>'create location successfully','data'=>$location],200);
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $id)
    {
        $location = Location::find($id);
        if (!isset($location)) {
            return response()->json(['request' => false, 'Massage' => 'Location id ' . $id. ' does not exist'],412);
        }
        return response()->json(['request' => true, 'data' => $location],200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $location = Location::find($id);
        if (!isset($location)) {
            return response()->json(['request' => false, 'Massage' => 'Location id ' . $id. ' does not exist'],412);
        }
        $location = Location::updateLocation($location);
        return response()->json(['request update' => true, 'data' => $location],200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $id)
    {
        $location = Location::find($id);
        if (!isset($location)) {
            return response()->json(['request' => false, 'Massage' => 'Location id ' . $id. ' does not exist'],412);
        }
        $location->delete();
        return response()->json(['request' => false, 'Massage'=> 'deleted'],200);
    }
}

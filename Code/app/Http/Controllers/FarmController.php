<?php

namespace App\Http\Controllers;

use App\Http\Requests\FarmRequest;
use App\Http\Resources\FarmResource;
use App\Models\Farm;
use Illuminate\Http\Request;

class FarmController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $farm = Farm::all();
        $farm = FarmResource::collection($farm);
        return $farm;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(FarmRequest $request)
    {
        $farm = Farm::createFarm($request);
        return response()->json(['Massage' => 'Farm created successfully','data'=> $farm]);    }

    /**
     * Display the specified resource.
     */
    public function show(Request $id)
    {
        $farm = Farm::find($id);
        if (!isset($farm)) {
            return response()->json(['request' => false, 'Massage' => 'Farm' . $id. 'does not exist']);
        }
        $farm = FarmResource::collection($farm);
        return $farm;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $farm = Farm::find($id);
        if (!isset($farm)) {
            return response()->json(['request' => false, 'Massage' => 'Farm' . $id. 'does not exist']);
        }
        $farm = Farm::updateFarm($farm);
        return $farm;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $id)
    {
        $farm = Farm::find($id);
        if (!isset($farm)) {
            return response()->json(['request' => false, 'Massage' => 'Farm' . $id. 'does not exist']);
        }
        return response()->json(['delete' => true]);
    }
}

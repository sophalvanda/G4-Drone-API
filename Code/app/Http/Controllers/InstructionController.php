<?php

namespace App\Http\Controllers;

use App\Http\Requests\InstuctionRequest;
use App\Http\Resources\InstructionResource;
use App\Models\DronePlane;
use App\Models\Instruction;
use Illuminate\Http\Request;

class InstructionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $instuction = Instruction::all();
        $instuction = InstructionResource::collection($instuction);
        return response()->json(['message'=>'Request successfully!','data'=>$instuction]);
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        //
    }
}

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
    public function store(InstuctionRequest $request)
    {
        $instuction = Instruction::createInstruction($request);
        $instuction = InstructionResource::collection($instuction);
        return response()->json(['message'=>'create instruction successfully!','data' => $instuction],200);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $instuction = Instruction::find($id);
        if (!isset($instuction)) {
            return response()->json(['request' => false,'message' => 'Instruction id '.$id. ' does not exist']);
        }
        return $instuction;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $instuction = Instruction::find($id);
        if (!isset($instuction)) {
            return response()->json(['request' => false, 'Massage' => 'Instruction id ' . $id. ' does not exist']);
        }
        $instuction = Instruction::updateInstruction($instuction);
        return $instuction;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $instuction = Instruction::find($id);
        if (!isset($instuction)) {
            return response()->json(['request' => false, 'Massage' => 'Instruction id ' . $id. ' does not exist']);
        }
        $instuction->delete();
        return response()->json(['delete' => true]);
    }
}

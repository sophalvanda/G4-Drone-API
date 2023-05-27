<?php

namespace App\Http\Controllers;

use App\Http\Requests\PlanRequest;
use App\Http\Resources\PlanResource;
use App\Models\Plan;
use Illuminate\Http\Request;

class PlanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $plan = Plan::all();
        $plan = PlanResource::collection($plan);
        return response()->json(['message'=>'Requested plan successfully','data'=>$plan]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PlanRequest $request)
    {
        //
        $plan = Plan::createPlan($request);
        $plan =new PlanResource($plan);
        return response()->json(['message'=>'Create successfully!','data'=>$plan]);
    }

    /**
     * Display the specified resource.
     */
    public function show($plan_name)
    {
        $plan = Plan::where('name',$plan_name)->first();
        if (!isset($plan)) {
            return response()->json(['message'=>'Name '. $plan_name. ' does not exist'],412);
        }
        $plan = new PlanResource($plan);
        return response()->json(['message'=>'successfully!','data'=>$plan]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Plan $plan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Plan $plan)
    {
        //
    }
}

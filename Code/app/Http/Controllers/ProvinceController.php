<?php

namespace App\Http\Controllers;

use App\Models\Province;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProvinceRequest;
use Illuminate\Http\Request;

class ProvinceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProvinceRequest $request)
    {
        $province = Province::createProvince($request);
        return response()->json(['Massage' => 'create province successfully','data' => $province],200);
    }

    /**
     * Display the specified resource.
     */
    public function show(Province $province)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Province $province)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Province $province)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\MapRequest;
use App\Http\Resources\FarmerResource;
use App\Http\Resources\FarmResource;
use App\Http\Resources\MapProvinceResource;
use App\Http\Resources\MapResource;
use App\Http\Resources\CreateMapResource;
use App\Http\Resources\ProvinceResource;
use App\Models\Farm;
use App\Models\Map;
use App\Models\Province;
use Illuminate\Http\Request;

class MapController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $map = Map::all();
        $map = MapResource::collection($map);
        return response()->json(['success' =>true, 'map' => $map],200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MapRequest $request,string $province_name ,string $farm_id)
    {

        $province = Province::where('name',$province_name)->first();
        if (!isset($province)) {
            return response()->json(['success' => false,'province' =>$province_name. ' does not exist'],412);
        }
        $farms = $province->farms->where('id',$farm_id)->first();
        if (empty($farms)) {
            return response()->json(['success' => false,'farm_id' => 'Farm id '.$farm_id. ' does not exist'. ' in '.$province_name],412);
        }
        $maps = MapResource::collection($farms->Map);  
        $maps = Map::createMap($request);
        return $maps;

    }

    /**
     * Display the specified resource.
     */
    public function show(string $province_name ,string $farm_id)
    {
        $province = Province::where('name',$province_name)->first();
        if (!isset($province)) {
            return response()->json(['success' => false,'province' =>$province_name. ' does not exist'],412);
        }
        $farms = $province->farms->where('id',$farm_id)->first();
        if (empty($farms)) {
            return response()->json(['success' => false,'farm_id' => 'Farm id '.$farm_id. ' does not exist'. ' in '.$province_name],412);
        }
        $maps = MapResource::collection($farms->Map);
        return response()->json(['success' => true,'data'=> $maps],412);
    }
    public function deleteImageFarm(string $province_name ,string $farm_id){
        $province = Province::where('name',$province_name)->first();
        if (!isset($province)) {
            return response()->json(['success' => false,'province' =>$province_name. ' does not exist'],412);
        }
        $farms = $province->farms->where('id',$farm_id)->first();
        if (empty($farms)) {
            return response()->json(['success' => false,'farm_id' => 'Farm id '.$farm_id. ' does not exist'. ' in '.$province_name],412);
        }
        $maps = MapResource::collection($farms->Map);
        if (!empty($maps->all())) {
            foreach ($maps as $map) {
                $map->delete();
            }
            return response()->json(['success' => true,'message' => 'Map photos deleted'],200);
        }
        return response()->json(['success' => false,'massage' => 'Delete photos undefined'],412);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Map $map)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Map $map)
    {
        //
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Map extends Model
{
    use HasFactory;
    protected $fillable = [
        'image',
        'farm_id',
        'drone_id',
        'location_id'
    ];
    public function Drone(): BelongsTo
    {
        return $this->belongsTo(Drone::class);
    }
    public function Farm(): BelongsTo
    {
        return $this->belongsTo(Farm::class);
    }
    public function Plan(): BelongsTo
    {
        return $this->belongsTo(Plan::class);
    }
    public function Location(): BelongsTo
    {
        return $this->belongsTo(Location::class);
    }
    public static function createMap($request){
        $maps = Map::create([
            'image' => $request->image,
            'farm_id' => $request->farm_id,
            'drone_id' => $request->drone_id,
            'location_id' => $request->location_id
        ]);
        return $maps;
    }
    
}

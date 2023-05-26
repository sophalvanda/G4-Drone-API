<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Drone extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'type',
        'battery',
        'payload_capacity',
        'user_id',
        'location_id',
    ];
    public function instructions(): HasMany
    {
        return $this->hasMany(Instruction::class);
    }
    public function Map(): HasMany
    {
        return $this->hasMany(Map::class);
    }
    public function location(): BelongsTo
    {
        return $this->belongsTo(Location::class);
    }
    public static function drone($request) {
        $drone = Drone::create([
            'name' => $request->name,
            'type' => $request->type,
            'battery' => $request->battery,
            'payload_capacity' => $request->payload_capacity,
            'user_id' => $request->user_id,
            'location_id' => $request->location_id
        ]);
        return $drone;
    }
    
}

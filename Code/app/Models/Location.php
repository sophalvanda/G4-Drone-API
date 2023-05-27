<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Location extends Model
{
    use HasFactory;
    protected $fillable = [
        'latitude ',
        'longitude'
    ];
    public function Plan(): HasOne
    {
        return $this->hasOne(Plan::class);
    }
    public function Map(): HasOne
    {
        return $this->hasOne(Map::class);
    }

    public function drone(): HasMany
    {
        return $this->hasMany(Location::class);
    }
    public static function createLocation($request) {
        $locations = Location::create([
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
        ]);
        return $locations;
    }
    public static function updateLocation($request) {
        $locations = Location::updated([
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
        ]);
        return $locations;
    }
}

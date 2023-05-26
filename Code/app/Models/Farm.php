<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Farm extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'province_id',
        'user_id'
    ];
    public function Map(): HasMany
    {
        return $this->hasMany(Map::class);
    }
    public function Plan(): BelongsTo
    {
        return $this->belongsTo(Plan::class);
    }
    public function province(): BelongsTo
    {
        return $this->belongsTo(Province::class);
    }
    public static function createFarm($request) {
        $farms = Farm::create([
            'name' => $request->name,
            'province_id' => $request->province_id,
            'user_id' => $request->user_id
        ]);
        return $farms;
    }
    public static function updateFarm($request) {
        $farms = Farm::updated([
            'name' => $request->name,
            'province_id' => $request->province_id,
            'user_id' => $request->user_id
        ]);
        return $farms;
    }
}

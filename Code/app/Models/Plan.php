<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Plan extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'type',
        'description',
        'datetime',
        'area',
        'user_id',
    ];
    public function Instruction(): HasMany
    {
        return $this->hasMany(Instruction::class);
    }
    public function Farm(): HasMany
    {
        return $this->hasMany(Farm::class);
    }
    public function Farmer(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function Location(): BelongsTo
    {
        return $this->belongsTo(Location::class);
    }
    public function Map(): HasMany
    {
        return $this->hasMany(Map::class);
    }
    
}

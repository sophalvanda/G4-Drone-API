<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Drone extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'type',
        'battery',
        'payload-capacity',
        'location_id',
        'user_id',
    ];
    public function Instruction(): HasMany
    {
        return $this->hasMany(Instruction::class);
    }
    public function Map(): HasMany
    {
        return $this->hasMany(Map::class);
    }
}

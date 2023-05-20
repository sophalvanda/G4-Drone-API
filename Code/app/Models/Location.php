<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
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
}

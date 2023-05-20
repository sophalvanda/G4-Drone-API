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
        'province',
        'plan_id',
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
}

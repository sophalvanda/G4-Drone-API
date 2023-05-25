<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany as RelationsHasMany;

class Instruction extends Model
{
    use HasFactory;
    protected $fillable = [
        'status',
        'drone_id',
        'plan_id'
    ];
    public function Drone(): BelongsTo
    {
        return $this->belongsTo(Drone::class);
    }
    public function Plan(): BelongsTo
    {
        return $this->belongsTo(Plan::class);
    }
}

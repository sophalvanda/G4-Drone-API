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
    public static function createInstruction($request) {
        $instructions = Instruction::create([
            'status' => $request->status,
            'drone_id' => $request->drone_id,
            'plan_id' => $request->plan_id
        ]);
    } 
    public static function updateInstruction($request) {
        $instructions = Instruction::updated([
            'status' => $request->status,
            'drone_id' => $request->drone_id,
            'plan_id' => $request->plan_id
        ]);
        return $instructions;
    }
}

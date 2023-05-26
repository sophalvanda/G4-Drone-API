<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Province extends Model
{
    use HasFactory;
    protected $fillable = [
        'name'
    ];
    public function farms(): HasMany
    {
        return $this->hasMany(Farm::class);
    }
    public static function createProvince($request){
        $province = Province::create([
            'name' => $request->name
        ]);
        return $province;
    }
}

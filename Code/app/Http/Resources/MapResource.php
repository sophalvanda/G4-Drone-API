<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class MapResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'image' => $this->image,
            'farm_id' => $this->farm_id,
            'farm_name' => $this->Farm->name,
            'drone' => $this->Drone->name,
            'location_id' => $this->Location,
        ];
    }
}

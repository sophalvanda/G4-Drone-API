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
            'image_url' => $this->image_url,
            'farm_id' => $this->name,
            'location_id' => $this->location_id,
            'drone_id' => new DroneResource($this->Drone),
            'farm' => new FarmResource($this->Farm)
        ];
    }
}

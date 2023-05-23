<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class DroneResource extends JsonResource
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
            'name' => $this->name,
            'type' => $this->type,
            'battery' => $this->battery,
            'payload_capacity' => $this->payload_capacity,
            'user_id' => $this->user_id,
            'location_id' => $this->location_id,
        ];
    }
}

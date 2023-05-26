<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class FarmResource extends JsonResource
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
            'province_id' => $this->province_id,
            'province_name' =>$this->province->name,
            'user_id' => $this->user_id,
            'map' => MapResource::collection($this->Map),
        ];
    }
}

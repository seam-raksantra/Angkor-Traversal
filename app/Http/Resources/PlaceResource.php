<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PlaceResource extends JsonResource
{
    public function toArray($request)
{
    return [
        'id' => $this->id,
        'name' => $this->name,
        'price' => $this->price,
        'duration' => $this->duration,
        'location' => $this->location,
        'image' => $this->image,
        'details' => $this->details,
        'province' => new ProvinceResource($this->province),
        'links' => [
            'self' => url('/api/places/'.$this->id)
        ],
    ];
}
}
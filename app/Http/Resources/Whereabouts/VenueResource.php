<?php

namespace App\Http\Resources\Whereabouts;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Whereabouts\CityResource;

class VenueResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'name' => $this->name,
            'city' => new CityResource($this->city)
        ];
    }
}

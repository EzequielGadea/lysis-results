<?php

namespace App\Http\Resources\Common;

use App\Http\Resources\Common\SportResource;
use App\Http\Resources\Whereabouts\CountryResource;
use Illuminate\Http\Resources\Json\JsonResource;

class LeagueResource extends JsonResource
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
            'id' => $this->id,
            'name' => $this->name,
            'picture' => $this->picture,
            'country' => new CountryResource($this->country),
            'sport' => new SportResource($this->sport),
        ];
    }
}

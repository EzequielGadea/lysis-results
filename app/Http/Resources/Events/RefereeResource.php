<?php

namespace App\Http\Resources\Events;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Whereabout\CountryResource;

class RefereeResource extends JsonResource
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
            'name' => $this->name . ' ' . $this->surname,
            'birthDate' => $this->birth_date,
            'country' => CountryResource::collection($this->country),
            'picture' => $this->picture,
        ];
    }
}

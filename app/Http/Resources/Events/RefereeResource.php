<?php

namespace App\Http\Resources\Events;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Whereabouts\CountryResource;

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
            'country' => new CountryResource($this->country),
            'picture' => $this->picture,
        ];
    }
}

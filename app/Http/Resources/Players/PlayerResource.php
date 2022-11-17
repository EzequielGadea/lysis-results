<?php

namespace App\Http\Resources\Players;

use Illuminate\Http\Resources\Json\JsonResource;

class PlayerResource extends JsonResource
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
            'surname' => $this->surname,
            'birthDate' => $this->birth_date,
            'height' => $this->height,
            'weight' => $this->weight,
            'country' => new CountryResource($this->country),
            'picture' => $this->picture
        ];
    }
}
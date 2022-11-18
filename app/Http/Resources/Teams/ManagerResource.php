<?php

namespace App\Http\Resources\Teams;

use App\Http\Resources\Whereabouts\CountryResource;
use Illuminate\Http\Resources\Json\JsonResource;

class ManagerResource extends JsonResource
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
            'birthdate' => $this->birth_date,
            'picture' => $this->picture,
            'country' => new CountryResource($this->country),
        ];
    }
}

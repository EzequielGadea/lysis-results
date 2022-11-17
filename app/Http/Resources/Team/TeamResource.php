<?php

namespace App\Http\Resources\Team;

use App\Http\Resources\Common\LeagueResource;
use App\Http\Resources\Team\ManagerResource;
use App\Http\Resources\Whereabouts\CountryResource;
use Illuminate\Http\Resources\Json\JsonResource;

class TeamResource extends JsonResource
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
            'league' => new LeagueResource($this->league),
            'manager' => new ManagerResource($this->manager),
        ];
    }
}

<?php

namespace App\Http\Resources\Teams;

use App\Http\Resources\Common\LeagueResource;
use App\Http\Resources\Teams\ManagerResource;
use App\Http\Resources\Players\PlayerTeamResource;
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
            'country' => new CountryResource($this->whenLoaded('country')),
            'league' => new LeagueResource($this->whenLoaded('league')),
            'manager' => new ManagerResource($this->whenLoaded('manager')),
            'players' => PlayerTeamResource::collection($this->whenLoaded('playerTeams')),
        ];
    }
}

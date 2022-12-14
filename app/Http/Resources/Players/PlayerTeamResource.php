<?php

namespace App\Http\Resources\Players;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Players\PlayeryResource;
use App\Http\Resources\Teams\TeamResource;
use App\Http\Resources\Players\PositionResource;

class PlayerTeamResource extends JsonResource
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
            'player' => new PlayerResource($this->player),
            'team' => new TeamResource($this->whenLoaded('team')),
            'contractStart' => $this->contract_start,
            'shirtNumber' => $this->shirt_number,
            'position' => new PositionResource($this->position)
        ];
    }
}

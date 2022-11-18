<?php

namespace App\Http\Resources\Events;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Events\EventResource;
use App\Http\Resources\Players\PlayerTeamResource;

class EventPlayerTeamResource extends JsonResource
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
            'event' => new EventResource($this->event),
            'playerTeam' => new PlayerTeamResource($this->player_team),
        ];
    }
}

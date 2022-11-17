<?php

namespace App\Http\Resources\Events;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Sanctions\SanctionCardlessResource;
use App\Http\Resources\Events\EventPlayerTeamResource;

class EventPlayerTeamSanctionCardlessResource extends JsonResource
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
            'sanctionCardless' => new SanctionCardlessResource($this->sanction_cardless),
            'event_player_team' => new EventPlayerTeamResoruce($this->event_player_team),
            'minute' => $this->minute,
        ];
    }
}

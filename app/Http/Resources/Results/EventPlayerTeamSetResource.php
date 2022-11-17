<?php

namespace App\Http\Resources\Results;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Results\SetResource;
use App\Http\Resources\Events\EventPlayerTeamResource;

class EventPlayerTeamSetResource extends JsonResource
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
            'set' => new SetResource($this->set),
            'eventPlayerTeam' => new EventPlayerTeamResource($this->eventPlayerTeam),
            'minute' => $this->minute,
            'pointsInFavor' => $this->points_in_favor,
            'pointsAgainst' => $this->points_against,
        ];
    }
}

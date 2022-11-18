<?php

namespace App\Http\Resources\Results;

use App\Http\Resources\Events\EventPlayerTeamResource;
use App\Http\Resources\Results\ByPointResource;
use Illuminate\Http\Resources\Json\JsonResource;

class ByPointEventPlayerTeamResource extends JsonResource
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
            'minute' => $this->minute,
            'pointsInFavor' => $this->points_in_favor,
            'pointsAgainst' => $this->points_against,
            'result' => new ByPointResource($this->result),
            'eventPlayerTeam' => new EventPlayerTeamResource($this->eventPlayerTeam),
        ];
    }
}

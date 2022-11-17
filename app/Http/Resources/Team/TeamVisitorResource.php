<?php

namespace App\Http\Resources\Team;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Events\EventResource;
use App\Http\Resources\Teams\TeamResource;

class TeamVisitorResource extends JsonResource
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
            'event_id' => new EventResource($this->event),
            'team_id' => new TeamResource($this->team),
        ];
    }
}

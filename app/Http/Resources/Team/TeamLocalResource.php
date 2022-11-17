<?php

namespace App\Http\Resources\Team;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Events\EventResource;
use App\Http\Resources\Teams\TeamResource;


class TeamLocalResource extends JsonResource
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
            'eventId' => new EventResource($this->event),
            'teamId' => new TeamResource($this->team),
        ];
    }
}

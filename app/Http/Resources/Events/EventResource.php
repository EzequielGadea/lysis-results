<?php

namespace App\Http\Resources\Events;

use App\Http\Resources\Common\LeagueResource;

use App\Http\Resources\Results\ByPointEventPlayerTeamResource;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Teams\TeamLocalResource;
use App\Http\Resources\Teams\TeamVisitorResource;


class EventResource extends JsonResource
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
            'startDate' => $this->start_date,
            'league' => new LeagueResource($this->league),

            'teamLocal' => new TeamLocalResource($this->whenLoaded('teamLocal')),
            'teamVisitor' => new TeamVisitorResource($this->whenLoaded('teamVisitor')),
            

        ];
    }
}

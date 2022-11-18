<?php

namespace App\Http\Resources\Events;

use App\Http\Resources\Common\LeagueResource;
use Illuminate\Http\Resources\Json\JsonResource;

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
        ];
    }
}

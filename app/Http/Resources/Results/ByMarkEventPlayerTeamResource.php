<?php

namespace App\Http\Resources\Results;

use App\Http\Resources\Events\EventPlayerTeamResource;
use App\Http\Resources\Results\ByMarkResource;
use Illuminate\Http\Resources\Json\JsonResource;

class ByMarkEventPlayerTeamResource extends JsonResource
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
            'markValue' => $this->mark_value,
            'eventPlayerTeam' => new EventPlayerTeamResource($this->eventPlayerTeam),
            'result' => new ByMarkResource($this->result),
        ];
    }
}

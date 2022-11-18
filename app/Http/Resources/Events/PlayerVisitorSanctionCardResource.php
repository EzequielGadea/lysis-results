<?php

namespace App\Http\Resources\Events;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Events\EventResource;
use App\Http\Resources\Sanctions\SanctionCardResource;
use App\Http\Resources\Players\PlayerResource;

class PlayerVisitorSanctionCardResource extends JsonResource
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
            'player' => new PlayerResource($this->playerVisitor->player),
            'event' => new EventResource($this->playerVisitor->event),
            'sanctionCard' => new SanctionCardResource($this->sanction),
            'minute' => $this->minute,
        ];
    }
}

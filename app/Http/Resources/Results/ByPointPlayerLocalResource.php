<?php

namespace App\Http\Resources\Results;

use App\Http\Resources\Events\EventResource;
use App\Http\Resources\Results\ByMarkResource;
use Illuminate\Http\Resources\Json\JsonResource;

class ByPointPlayerLocalResource extends JsonResource
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
            'result' => new ByMarkResource($this->result),
            'event' => new EventResource($this->event),
        ];
    }
}

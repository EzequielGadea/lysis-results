<?php

namespace App\Http\Resources\Results;

use App\Http\Resources\Events\EventResource;
use App\Http\Resources\Results\ByMarkResource;
use Illuminate\Http\Resources\Json\JsonResource;

class ByMarkPlayerLocalResource extends JsonResource
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
            'result' => new ByMarkResource($this->result),
            'event' => new EventResource($this->event),
        ];
    }
}

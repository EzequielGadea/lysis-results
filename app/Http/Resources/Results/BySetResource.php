<?php

namespace App\Http\Resources\Results;

use Illuminate\Http\Resources\Json\JsonResource;

class BySetResource extends JsonResource
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
            'result' => new ResultTypeResource($this->event),
            'setAmount' => $this->set_amount,
        ];
    }
}

<?php

namespace App\Http\Resources\Results;

use App\Http\Resources\Events\EventResource;
use App\Http\Resources\Result\TypeResource;
use Illuminate\Http\Resources\Json\JsonResource;

class ByPointResource extends JsonResource
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
            'event' => new EventResource($this->event),
            'resultType' => new ResultTypeResource($this->type),
        ];
    }
}

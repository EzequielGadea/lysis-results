<?php

namespace App\Http\Resources\Results;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Results\BySetResource;


class SetResource extends JsonResource
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
            'bySet' => new BySetResource($this->sets),
            'number' => $this->number,
        ];
    }
}

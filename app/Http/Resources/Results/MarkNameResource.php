<?php

namespace App\Http\Resources\Results;

use App\Http\Resources\Common\CriteriaResource;
use App\Http\Resources\Common\UnitResource;
use Illuminate\Http\Resources\Json\JsonResource;

class MarkNameResource extends JsonResource
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
            'name' => $this->name,
            'criteria' => new CriteriaResource($this->resource),
            'unit' => new UnitResource($this->unit),
        ];
    }
}

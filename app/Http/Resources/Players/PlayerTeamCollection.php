<?php

namespace App\Http\Resources\Players;

use App\Http\Resources\Players\PlayeryResource;
use App\Http\Resources\Team\TeamResource;
use App\Http\Resources\Players\PositionResource;
use Illuminate\Http\Resources\Json\ResourceCollection;

class PlayerTeamCollection extends ResourceCollection
{
    public $collects = PlayerTeamResource::class;
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'data' => $this->collection,
        ];
    }
}

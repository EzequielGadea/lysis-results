<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\Players\PlayerTeamResource;
use App\Models\Players\PlayerTeam;
use App\Http\Resources\Events\EventPlayerTeamResource;
use App\Models\Events\EventPlayerTeam;

class PlayerController extends Controller
{
    public function show(PlayerTeam $player)
    {
        return (new PlayerTeamResource($player->loadMissing(['events', 'team'])))->response();
    }
}

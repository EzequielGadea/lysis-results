<?php

namespace App\Http\Controllers;

use App\Http\Resources\Teams\TeamResource;
use App\Models\Teams\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index()
    {
        return TeamResource::collection(Team::all()->loadMissing(['playerTeams']));
    }

    public function show(Team $team)
    {
        return (new TeamResource($team->loadMissing(['playerTeams'])))->response();
    }
}

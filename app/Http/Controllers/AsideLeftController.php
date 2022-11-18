<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\Common\SportResource;
use App\Models\Common\Sport;
use App\Http\Resources\Common\LeagueResource;
use App\Models\Common\League;
use App\Http\Resources\Whereabouts\CountryResource;
use App\Models\Whereabouts\Country;

class AsideLeftController extends Controller
{
    public function getSports()
    {
        return SportResource::collection(Sport::all());
    }

    public function getLeagues()
    {
        return LeagueResource::collection(League::all());
    }

    public function getCountries()
    {
        return CountryResource::collection(Country::all());
    }
}

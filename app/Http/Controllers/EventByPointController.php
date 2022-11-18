<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\Results\ByPointResource;
use App\Models\Results\ByPoint;

class EventByPointController extends Controller
{
    public function index()
    {   
        return ByPointResource::collection(ByPoint::all());
    }
}

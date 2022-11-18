<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\Teams\TeamLocalResource;
use App\Http\Resources\Teams\TeamVisitorResource;
use App\Http\Resources\Events\EventResource;
use App\Models\Events\Event;
use App\Models\Teams\TeamLocal;
use App\Models\Teams\TeamVisitor;
use App\Models\Common\Sport;

class HomeController extends Controller
{
    public function index() 
    {
        return EventResource::collection(Event::all()->loadMissing(['teamLocal', 'teamVisitor']));
        
    }
    

    
}

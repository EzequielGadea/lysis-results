<?php

use App\Http\Controllers\TeamController;

use App\Http\Controllers\HomeController;
use App\Http\Resources\Players\PlayerTeamResource;
use App\Models\Players\PlayerTeam;

use App\Http\Controllers\PlayerController;
use App\Http\Controllers\AsideLeftController;
use App\Http\Controllers\EventByPointController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Resources\Events\EventResource;
use App\Models\Events\Event;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(TeamController::class)->prefix('team')->group(function () {
    Route::get('index', 'index');
    Route::get('{team}', 'show');
});


Route::controller(HomeController::class)->prefix('event')->group(function () {
    Route::get('index', 'index');
});

Route::controller(PlayerController::class)->prefix('player')->group(function () {
    Route::get('{player}', 'show');
});

Route::controller(AsideLeftController::class)->prefix('asideLeft')->group(function () {
    Route::get('getSports', 'getSports');
    Route::get('getLeagues', 'getLeagues');
    Route::get('getCountries', 'getCountries');
});

Route::controller(EventByPointController::class)->prefix('byPoint')->group(function () {
    Route::get('index', 'index');
});


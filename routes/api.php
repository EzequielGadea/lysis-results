<?php

use App\Http\Controllers\TeamController;
use App\Http\Resources\Players\PlayerTeamResource;
use App\Models\Players\PlayerTeam;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Resources\Results\MarkNameResource;
use App\Models\Results\MarkName;

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

Route::get('/test', function() {
    return MarkNameResource::collection(MarkName::all());
});

<?php

use App\Http\Controllers\TeamController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\AsideLeftController;
use App\Http\Controllers\EventByPointController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


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
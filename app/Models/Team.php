<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Team extends Model
{
    use HasFactory, SoftDeletes;

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function league()
    {
        return $this->belongsTo(League::class);
    }

    public function manager()
    {
        return $this->belongsTo(Manager::class);
    }

    public function playerTeams()
    {
        return $this->hasMany(PlayerTeam::class);
    }

    public function players()
    {
        return $this->hasManyThrough(Player::class, PlayerTeam::class, 'id', 'id', 'id', 'player_id');
    }

    public function events()
    {
        return $this->hasManyThrough(EventPlayerTeam::class, PlayerTeam::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PlayerTeam extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'player_team';

    public function player()
    {
        return $this->belongsTo(Player::class);
    }

    public function team()
    {
        return $this->belongsTo(Team::class);
    }

    public function position()
    {
        return $this->belongsTo(Position::class);
    }

    public function events()
    {
        return $this->hasMany(EventPlayerTeam::class, 'player_team_id', 'id');
    }
}

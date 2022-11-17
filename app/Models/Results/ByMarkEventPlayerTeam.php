<?php

namespace App\Models\Results;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Events\EventPlayerTeam;
use App\Models\Events\Event;
use App\Models\Results\ByMark;
use App\Models\Players\PlayerTeam;

class ByMarkEventPlayerTeam extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'by_mark_event_player_team';

    public function eventPlayerTeam()
    {
        return $this->belongsTo(EventPlayerTeam::class);
    }

    public function result()
    {
        return $this->belongsTo(ByMark::class, 'by_mark_id', 'id');
    }

    public function event()
    {
        return $this->hasOneThrough(Event::class, EventPlayerTeam::class);
    }

    public function playerTeam()
    {
        return $this->hasOneThrough(PlayerTeam::class, EventPlayerTeam::class, 'player_id', 'player_id');
    }
}

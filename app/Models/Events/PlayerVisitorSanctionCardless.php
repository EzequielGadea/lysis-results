<?php

namespace App\Models\Events;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Players\PlayerVisitor;
use App\Models\Sanctions\SanctionCardless;

class PlayerVisitorSanctionCardless extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'player_visitor_sanction_cardless';

    public function sanction()
    {
        return $this->belongsTo(SanctionCardless::class, 'sanction_cardless_id');
    }

    public function playerVisitor()
    {
        return $this->belongsTo(PlayerVisitor::class, 'event_id', 'event_id');
    }
}

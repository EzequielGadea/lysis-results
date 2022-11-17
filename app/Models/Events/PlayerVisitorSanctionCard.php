<?php

namespace App\Models\Events;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Players\PlayerVisitor;
use App\Models\Sanctions\SanctionCard;

class PlayerVisitorSanctionCard extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'player_visitor_sanction_card';

    public function playerVisitor()
    {
        return $this->belongsTo(PlayerVisitor::class);
    }

    public function sanction()
    {
        return $this->belongsTo(SanctionCard::class);
    }
}

<?php

namespace App\Models\Results;

use App\Models\Common\ResultType;
use App\Models\Events\Event;
use App\Models\Results\ByPointEventPlayerTeam;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ByPoint extends Model
{
    use HasFactory, SoftDeletes;

    public function event()
    {
        return $this->belongsTo(Event::class);
    }

    public function teamPoints()
    {
        return $this->hasMany(ByPointEventPlayerTeam::class);
    }

    public function type()
    {
        return $this->belongsTo(ResultType::class, 'result_type_id', 'id');
    }

    public function playerLocalPoints()
    {
        return $this->hasMany(ByPointPlayerLocal::class);
    }

    public function playerVisitorPoints()
    {
        return $this->hasMany(ByPointPlayerVisitor::class);
    }
}

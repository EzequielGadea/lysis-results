<?php

namespace App\Models\Whereabouts;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Whereabouts\City;
use App\Models\Events\Event;

class Venue extends Model
{
    use HasFactory, SoftDeletes;

    public function events()
    {
        return $this->hasMany(Event::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }
}

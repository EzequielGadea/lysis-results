<?php

namespace App\Models\Ads;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Ads\Tag;
use App\Models\Ads\Ad;

class Value extends Model
{
    use HasFactory, SoftDeletes;

    public function tag() {
        return $this->belongsTo(Tag::class);
    }

    public function ads() {
        return $this->belongsToMany(Ad::class)->withTimestamps();
    }
}

<?php

namespace App\Models\Ads;

use App\Models\Ads\Value;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ad extends Model
{
    use HasFactory, SoftDeletes;

    public function values() {
        return $this->belongsToMany(Value::class)->withTimestamps();
    }
}

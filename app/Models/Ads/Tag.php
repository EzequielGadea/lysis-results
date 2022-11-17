<?php

namespace App\Models\Ads;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Ads\Value;

class Tag extends Model
{
    use HasFactory, SoftDeletes;

    public function value() {
        return $this->hasMany(Value::class);
    }
}

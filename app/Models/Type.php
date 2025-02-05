<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $fillable = [
        'planet_type',
    ];
    public function planets()
    {
        return $this->hasMany(Planet::class); // un tipo a tanti pianeti
    }
}

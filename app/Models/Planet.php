<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Planet extends Model
{
    protected $fillable =[
        'name',
        'mass_kg',
        'sun_distance',
        'orbital_days',
        'moons',
        'atmosphere',
        'avg_temp',
        'description',
        'link',
        'video'
    ];
    // protected $with = [ // To include on Planet::get(), table related ( called with function names ).
    //     'type',
    // ];

    public function type()
    {
        return $this->belongsTo(Type::class);
    }
}

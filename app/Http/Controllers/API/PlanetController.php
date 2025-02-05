<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Planet;

class PlanetController extends Controller
{
    public function index()
    {
        $data = Planet::all();
        return $data;
    }

    public function show(string $name)
    {
        $data = Planet::where('name', $name)->get();
        return $data;
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Planet;
use Illuminate\Http\Request;

class PlanetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Planet::all();
        return $data;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $name)
    {
        $data = Planet::where('name', $name)->get();
        return $data;
    }

}

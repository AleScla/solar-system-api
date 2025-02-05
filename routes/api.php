<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\PlanetController;

Route::resource('planets', PlanetController::class)->only([
    'index',
    'show'
]);


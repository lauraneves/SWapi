<?php

namespace App\Http\Controllers;

use App\Planet;
use App\Starship;

class FavoritesController extends Controller
{
    public function index() 
    {
        $favoritesStarships = Starship::all();
        $favoritesPlanets = Planet::all();
        return view('admin.favorites.index', compact('favoritesStarships', 'favoritesPlanets'));
    }
}
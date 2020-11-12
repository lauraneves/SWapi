<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Favorites;

class FavoritesController extends Controller
{
    public function index() 
    {
        $favorites = Favorites::all();
        return view('admin.favorites.index', compact('favorites'));
    }

    public function store()
    {
        
    }

    public function destroy(Favorites $favorites)
    {
        $favorites->delete();
        return redirect()->route('admin.saved.index')->with('success',true);
    }
}

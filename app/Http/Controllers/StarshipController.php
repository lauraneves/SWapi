<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Starship;

class StarshipController extends Controller
{
    public function index() 
    {
        $page = 1;
        if(request('page'))
        {
            $page = request('page');
        } 
      
        $url = "https://swapi.dev/api/starships/?page=" . $page;
        $response = json_decode(file_get_contents($url));
      
        $total_per_page = count($response->results);
        $total_collection = $response->count;
      
        $number_pages = $total_collection / $total_per_page;
      
        return view('admin.starships.index', compact('response', 'number_pages'));
    }

    public function show(Starship $starship)
    {
        // return view('admin.starships.show',compact('starship'));
    }

    public function saveStarship()
    {
        
    }
}

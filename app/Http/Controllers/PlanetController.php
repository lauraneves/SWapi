<?php

namespace App\Http\Controllers;

use App\Planet;
use Illuminate\Http\Request;
use Http;

class PlanetController extends Controller
{
    public function index(Request $request) 
    {
        $page = 1;
        if(request('page'))
        {
            $page = request('page');
        } 
      
        $url = "https://swapi.dev/api/planets/?page=" . $page;
        $response = json_decode(file_get_contents($url));
      
        $total_per_page = count($response->results);
        $total_collection = $response->count;
      
        $number_pages = $total_collection / $total_per_page;

        return view('admin.planets.index', compact('response', 'number_pages'));
    }

    public function show($id)
    {
        $url = "https://swapi.dev/api/planets/" . $id;
        $response = json_decode(file_get_contents($url));

        return view('admin.planets.form', compact('response'));
    }

    public function savePlanet()
    {
        
    }
}
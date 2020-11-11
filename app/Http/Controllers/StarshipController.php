<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StarshipController extends Controller
{
    public function index(Request $request) 
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

    public function show($id)
    {
        $url = "https://swapi.dev/api/starships/" . $id;
        $response = json_decode(file_get_contents($url));

        return view('admin.starships.form', compact('response'));
    }

    public function saveStarship()
    {
        
    }
}

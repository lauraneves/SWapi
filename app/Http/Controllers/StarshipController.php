<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StarshipController extends Controller
{
    public function index() 
    {
        $url = "https://swapi.dev/api/starships/";
        $response = json_decode(file_get_contents($url));

        return view('starship.index', compact('response'));
    }
}

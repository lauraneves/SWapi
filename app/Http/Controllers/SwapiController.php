<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Str;
use Http;

class SwapiController extends Controller
{
    public function index() 
    {
        $response = Http::get('https://swapi.dev/api/planets/1');
        $planets = $response->json();
        return view('swapi', compact('planets'));
    }

    
}
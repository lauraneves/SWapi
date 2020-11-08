<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Http;

class PlanetController extends Controller
{
    public function index() 
    {
        $page = 1;
        if(isset($_GET['page'])) $page = $_GET['page'];
      
        $url = "https://swapi.dev/api/planets/?page=" . $page;
        $response = json_decode(file_get_contents($url));
      
        $total_per_page = count($response->results);
        $total_collection = $response->count;
      
        $number_pages = $total_collection / $total_per_page;
      
        return view('planets.index', compact('response', 'number_pages'));
    }
}
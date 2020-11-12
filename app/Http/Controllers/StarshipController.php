<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Starship;
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

        return view('admin.starships.show', compact('response', 'url', 'id'));
    }

    public function store(Request $request)
    {
        $url = "https://swapi.dev/api/starships/" . $request->id;
        $response = json_decode(file_get_contents($url));

        $starship = Starship::create([
            'name' => $response->name,
            'model' => $response->model,
            'manufacturer' => $response->manufacturer,
            'starship_class' => $response->starship_class,
            'cost_in_credits' => $response->cost_in_credits,
            'length' => $response->length,
            'consumables' => $response->consumables,
            'crew' => $response->crew,
            'passengers' => $response->passengers,
            'cargo_capacity' => $response->cargo_capacity,
            'max_atmosphering_speed' => $response->max_atmosphering_speed,
            'hyperdrive_rating' => $response->hyperdrive_rating,
            'MGLT' => $response->MGLT,
        ]);

        $starship->users()->attach(Auth::user()->id);

        return redirect()->route('admin.starships.index')->with('success',true);
    }
}
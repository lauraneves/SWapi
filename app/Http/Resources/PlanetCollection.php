<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class PlanetCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'rotation_period' => $this->rotation_period,
            'orbital_period' => $this->orbital_period,
            'diameter' => $this->diameter,
            'climate' => $this->climate,
            'gravity' => $this->gravity,
            'terrain' => $this->terrain,
            'surface_water' => $this->surface_water,
            'population' => $this->population,
        ];
    }
}

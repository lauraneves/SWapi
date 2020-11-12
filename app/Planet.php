<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Planet extends Model
{
    public function favorites()
    {
        return $this->belongsToMany('App\Favorites');
    }
}

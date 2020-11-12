<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Favorites extends Model
{
    protected $guarded = [];

    public function planets()
    {
        return $this->hasMany('App\Planet');
    }
}

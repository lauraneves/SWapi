<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Planet extends Model
{
    protected $guarded = [];

    public function users() {
        return $this->belongsToMany('App\User', 'users_planets', 'planet_id', 'user_id');
    }
}

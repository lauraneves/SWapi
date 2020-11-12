<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Starship extends Model
{
    protected $guarded = [];

    public function users() {
        return $this->belongsToMany('App\User', 'users_starships', 'starship_id', 'user_id');
    }

}

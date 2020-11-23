<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    public function movie(){
        return $this->hasMany('App\Movie');
    }

    public function movie1(){
        return $this->belongsTo('\App\Movie','movie_id');
    }
}
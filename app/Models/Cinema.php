<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cinema extends Model
{
    use HasFactory;

    public function movies(){
        return $this->belongsToMany(Movie::class, 'cinema_movie', 'cinema_id', 'movie_id');
        //return $this->belongsToMany(Movie::class);
    }
}

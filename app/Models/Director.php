<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Film;

class Director extends Model
{
    use HasFactory;
    public function film(){
        return $this->hasOne(Film::class, 'director_id', 'id');
        //return $this->hasOne(Film::class);
    }
}

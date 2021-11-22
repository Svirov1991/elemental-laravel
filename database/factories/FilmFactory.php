<?php

namespace Database\Factories;

use App\Models\Film;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class FilmFactory extends Factory
{

    protected $model = Film::class;

    public function definition()
    {
        return [
            'title' => 'Film - '. $this->faker->name(),
            'director_id' => $this->faker->unique()->numberBetween(1, 30)
        ];
    }


}

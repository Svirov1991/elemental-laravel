<?php

namespace Database\Seeders;
use App\Models\Book;
use App\Models\Cinema;
use App\Models\CinemaMovie;
use App\Models\Film;
use App\Models\Director;
use App\Models\Author;
use App\Models\Movie;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        \App\Models\User::factory(10)->create();
        Director::factory(30)->create();
        Film::factory(30)->create();
        Author::factory(5)->create();
        Book::factory(30)->create();
        Cinema::factory(5)->create();
        Movie::factory(30)->create();
        CinemaMovie::factory(50)->create();

    }
}

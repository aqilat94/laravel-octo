<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class GenreMovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genre_movies')->insert([
            [
                'id' => 1,
                'movie_id' => 1,
                'genre_id' => 1,
            ],
            [
                'id' => 2,
                'movie_id' => 1,
                'genre_id' => 2,
            ],
            [
                'id' => 3,
                'movie_id' => 2,
                'genre_id' => 2,
            ],
            [
                'id' => 4,
                'movie_id' => 3,
                'genre_id' => 1,
            ],
            [
                'id' => 5,
                'movie_id' => 4,
                'genre_id' => 1,
            ],
            [
                'id' => 6,
                'movie_id' => 4,
                'genre_id' => 3,
            ],
            [
                'id' => 7,
                'movie_id' => 5,
                'genre_id' => 2,
            ],
            [
                'id' => 8,
                'movie_id' => 5,
                'genre_id' => 1,
            ],
        ]);
    }
}

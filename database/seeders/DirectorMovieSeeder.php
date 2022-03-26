<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DirectorMovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('director_movies')->insert([
            [
                'id' => 1,
                'movie_id' => 1,
                'director_id' => 1,
            ],
            [
                'id' => 2,
                'movie_id' => 2,
                'director_id' => 2,
            ],
            [
                'id' => 3,
                'movie_id' => 3,
                'director_id' => 3,
            ],
            [
                'id' => 4,
                'movie_id' => 4,
                'director_id' => 4,
            ],
            [
                'id' => 5,
                'movie_id' => 5,
                'director_id' => 5,
            ],
        ]);
    }
}

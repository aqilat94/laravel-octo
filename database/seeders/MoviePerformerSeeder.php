<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MoviePerformerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('movie_performers')->insert([
            [
                'id' => 1,
                'movie_id' => 1,
                'performer_id' => 1,
            ],
            [
                'id' => 2,
                'movie_id' => 1,
                'performer_id' => 2,
            ],
            [
                'id' => 3,
                'movie_id' => 2,
                'performer_id' => 3,
            ],
            [
                'id' => 4,
                'movie_id' => 3,
                'performer_id' => 1,
            ],
            [
                'id' => 5,
                'movie_id' => 4,
                'performer_id' => 3,
            ],
            [
                'id' => 6,
                'movie_id' => 5,
                'performer_id' => 1,
            ],
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ShowtimeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('showtimes')->insert([
            [
                'id' => 1,
                'time_start' => '2022-03-21 15:00:00',
                'time_end' => '2022-03-21 17:00:00',
                'length' => '120',
                'date_from' => '2022-03-21',
                'date_to' => '2022-04-20',
                'movie_id' => 1,
                'theater_id' => 2,

            ],
            [
                'id' => 2,
                'time_start' => '2022-03-30 20:00:00',
                'time_end' => '2022-03-30 22:00:00',
                'length' => '120',
                'date_from' => '2022-03-30',
                'date_to' => '2022-04-30',
                'movie_id' => 1,
                'theater_id' => 3,
            ],
            [
                'id' => 3,
                'time_start' => '2022-03-22 15:00:00',
                'time_end' => '2022-03-22 17:00:00',
                'length' => '120',
                'date_from' => '2022-03-22',
                'date_to' => '2022-04-20',
                'movie_id' => 2,
                'theater_id' => 1,
            ],
            [
                'id' => 4,
                'time_start' => '2022-03-20 15:00:00',
                'time_end' => '2022-03-20 17:00:00',
                'length' => '120',
                'date_from' => '2022-03-20',
                'date_to' => '2022-04-20',  
                'movie_id' => 4,
                'theater_id' => 2,
            ],
            [
                'id' => 5,
                'time_start' => '2022-03-30 20:00:00',
                'time_end' => '2022-03-30 22:00:00',
                'length' => '120',
                'date_from' => '2022-03-30',
                'date_to' => '2022-04-30',    
                'movie_id' => 5,
                'theater_id' => 1,
            ],
            [
                'id' => 6,
                'time_start' => '2022-03-20 15:00:00',
                'time_end' => '2022-03-20 17:00:00',
                'length' => '120',
                'date_from' => '2022-03-20',
                'date_to' => '2022-04-20',    
                'movie_id' => 5,
                'theater_id' => 3,
            ],
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('movies')->insert([
            [
                'id' => 1,
                'title' => 'Spider-Man: No Way Home',
                'description' => 'With Spider-Man identity now revealed, our friendly neighborhood web-slinger is unmasked and no longer able to separate his normal life as Peter Parker.',
                'mpaa_rating' => 'PG-13',
            ],
            [
                'id' => 2,
                'title' => 'Transformers: The Last Knight',
                'description' => 'Quintessa brainwashes Optimus Prime and heads to Earth to search for an ancient staff.',
                'mpaa_rating' => 'PG-13',
            ],
            [
                'id' => 3,
                'title' => 'Minions',
                'description' => 'Minions Kevin, Stuart and Bob decide to find a new master.',
                'mpaa_rating' => 'PG-13',
            ],
            [
                'id' => 4,
                'title' => 'Hantu Kak Limah',
                'description' => 'Apabila Kak Limah meninggal dunia sebaik sahaja mengahwini lelaki yang lebih muda, rohnya menghantui penduduk kampung dan nampaknya sukar diusir.',
                'mpaa_rating' => 'PG-13',
            ],
            [
                'id' => 5,
                'title' => 'Train To Busan',
                'description' => 'Seok-woo and his daughter are on a train to Busan on the latter birthday to see his wife.',
                'mpaa_rating' => 'PG-13',
            ],
        ]);
    }
}

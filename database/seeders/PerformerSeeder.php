<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PerformerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('performers')->insert([
            [
                'id' => 1,
                'name' => 'Performer A',
            ],
            [
                'id' => 2,
                'name' => 'Performer B',
            ],
            [
                'id' => 3,
                'name' => 'Performer C',
            ],
        ]);
    }
}

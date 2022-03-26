<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DirectorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('directors')->insert([
            [
                'id' => 1,
                'name' => 'Jon Watt',
            ],
            [
                'id' => 2,
                'name' => 'Micheal Bay',
            ],
            [
                'id' => 3,
                'name' => 'Pierre Coffin',
            ],
            [
                'id' => 4,
                'name' => 'Mamat Khalid',
            ], 
            [
                'id' => 5,
                'name' => 'Yeon Sang-Ho',
            ],
        ]);
    }
}

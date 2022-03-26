<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('languages')->insert([
            [
                'id' => 1,
                'name' => 'English',
            ],
            [
                'id' => 2,
                'name' => 'Malay',
            ],
            [
                'id' => 3,
                'name' => 'Korean',
            ],
        ]);
    }
}

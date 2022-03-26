<?php

namespace Database\Seeders;

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
        // \App\Models\User::factory(10)->create();
        $this->call([
            UserSeeder::class,
            MovieSeeder::class,
            GenreSeeder::class,
            TheaterSeeder::class,
            ShowtimeSeeder::class,
            PerformerSeeder::class,
            MoviePerformerSeeder::class,
            GenreMovieSeeder::class,
            DirectorSeeder::class,
            LanguageSeeder::class,
            DirectorMovieSeeder::class,
            LanguageMovieSeeder::class,
        ]);
    }
}

<?php

namespace App\Http\Controllers\API;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Genre;
use App\Models\Movie;
use App\Models\Rating;
use App\Models\Director;
use App\Models\Language;
use App\Models\Showtime;
use App\Models\Performer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MovieController extends Controller
{
    public function movieGenre(Request $request)
    {
        $movies = Movie::whereHas('showtimes', function($query){
                        // currently showing in theater
                        return $query->where('date_from', '<=', Carbon::now())->where('date_to', '>=', Carbon::now());
                    })->whereHas('genres' , function($query) use($request){
                        // request by genre
                        return $query->where('name',$request->genre);
                    })->with('languages', 'directors')->get();

        return response()->json([
            'name' => 'Genre',
            'status' => true,
            'message' => 'Sucessfully fetch movies with genre '.$request->genre,
            'data' => $movies,
        ], 200);
    }

    public function movieTimeslot(Request $request)
    {
        // Filter By Theater
        $movies = Movie::whereHas('showtimes', function($query) use($request){
            return $query->whereHas('theater', function($query2) use($request){
                return $query2->where('name', $request->theater);
            });
        });
        
        // Filter By Time Start and Time End
        $movie_by_time = $movies->whereHas('showtimes', function($query) use($request){
            return $query->where('time_start', '<=', $request->time_start)->where('time_end','>=', $request->time_end);
        })->with('languages', 'directors')->get();

        return response()->json([
            'name' => 'Timeslot',
            'status' => true,
            'message' => 'Sucessfully fetch movies with theater '.$request->theater.' with time start '.$request->time_start.' and time end '.$request->time_end,
            'data' => $movie_by_time,
        ], 200);
    }

    public function moviePerformer(Request $request)
    {
        // Filter By Performer
        $movies = Movie::whereHas('performers', function($query) use($request){
            return $query->where('name','like', '%' . $request->performer_name . '%');
        })->with('languages', 'directors')->get();

        return response()->json([
            'name' => 'Search Performer',
            'status' => true,
            'message' => 'Sucessfully fetch movies with performer name '.$request->performer_name,
            'data' => $movies,
        ], 200);
    }

    public function movieRating(Request $request)
    {
        $movie = Movie::where('title','like', '%' . $request->movie_title . '%')->get();

        $user = User::where('name','like', '%' . $request->username . '%')->get();

        $rating = Rating::create([
            'movie_id' => $movie->first()->id,
            'user_id' => $user->first()->id,
            'rating' => $request->rating,
            'description' => $request->r_description,
        ]);

        return response()->json([
            'name' => 'Give Rating',
            'status' => true,
            'message' => 'Sucessfully rate the movie '.$movie->first()->title.' with rating '.$request->rating. ' by user '. $user->first()->name,
            'data' => $rating,
        ], 200);
    }

    public function movieNew(Request $request)
    {
        $showtimes = Showtime::where('date_from', '<=', $request->r_date)->where('date_to', '>=' , $request->r_date)->orderBy('date_from', 'DESC')->with('movie')->get();

        return response()->json([
            'name' => 'New Movie',
            'status' => true,
            'message' => 'Sucessfully fetch recently came out movies with date from '.$request->r_date,
            'data' => $showtimes,
        ], 200);
    }

    public function movieAdd(Request $request)
    {
        // Add Movie
        $movie = Movie::create([
            'title' => $request->title,
            'description' => $request->description,
            'mpaa_rating' => $request->mpaa_rating,
        ]);

        $date_to = $this->addMonth($request->realease);

        // Add Showtime
        $showtime = Showtime::create([
            'length' => $request->length,
            'date_from' => $request->realease,
            'date_to' => $date_to,
            'movie_id' => $movie->id,
        ]);

        // Create for Directors
        foreach ($request->director as $director)
        {
            $directors = Director::firstOrCreate(
                            [
                                'name' => $director,
                            ],
                            [
                                'name' => $director,
                            ]
                        );

            $directors->movies()->attach($movie->id);
        }

        // Create for Genres
        foreach ($request->genre as $genre)
        {
            $genres = Genre::firstOrCreate(
                            [
                                'name' => $genre,
                            ],
                            [
                                'name' => $genre,
                            ]
                        );

            $genres->movies()->attach($movie->id);
        }

        // Create for Languages
        foreach ($request->language as $language)
        {
            $languages = Language::firstOrCreate(
                            [
                                'name' => $language,
                            ],
                            [
                                'name' => $language,
                            ]
                        );

            $languages->movies()->attach($movie->id);
        }

        // Create for Perfomers
        foreach ($request->performer as $performer)
        {
            $performers = Performer::firstOrCreate(
                            [
                                'name' => $performer,
                            ],
                            [
                                'name' => $performer,
                            ]
                        );

            $performers->movies()->attach($movie->id);
        }

        return response()->json([
            'name' => 'New Movie',
            'status' => true,
            'message' => 'Sucessfully add new movie',
            'data' => $movie->with('showtimes','genres','languages','directors','performers')->where('id', $movie->id)->get(),
        ], 200);
    }

    public function addMonth($request)
    {
        $date_to = Carbon::parse($request)->addMonth()->format('Y-m-d');

        return $date_to;
    }
}

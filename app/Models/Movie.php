<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'mpaa_rating',
        'user_id',
    ];

    public function genres()
    {
        return $this->belongsToMany(Genre::class, 'genre_movies');
    }

    public function performers()
    {
        return $this->belongsToMany(Performer::class, 'movie_performers');
    }

    public function languages()
    {
        return $this->belongsToMany(Language::class, 'language_movies');
    }

    public function directors()
    {
        return $this->belongsToMany(Director::class, 'director_movies');
    }

    public function showtimes()
    {
        return $this->hasMany(Showtime::class);
    }

    public function ratings()
    {
        return $this->hasMany(Rating::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    
}

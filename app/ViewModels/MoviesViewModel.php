<?php

namespace App\ViewModels;

use Carbon\Carbon;
use Spatie\ViewModels\ViewModel;

class MoviesViewModel extends ViewModel
{
    public $upcomingMovies;
    public $topMovies;
    public $popularMovies;
    public $nowPlayingMovies;
    public $genres;

    public function __construct($upcomingMovies, $topMovies, $popularMovies, $nowPlayingMovies, $genres)
    {
        $this->upcomingMovies = $upcomingMovies;
        $this->topMovies = $topMovies;
        $this->popularMovies = $popularMovies;
        $this->nowPlayingMovies = $nowPlayingMovies;
        $this->genres = $genres;
    }

    public function upcomingMovies()
    {
        return $this->formatMovies($this->upcomingMovies);
    }

    public function topMovies()
    {
        return $this->formatMovies($this->topMovies);
    }

    public function popularMovies()
    {
        return $this->formatMovies($this->popularMovies);
    }

    public function nowPlayingMovies()
    {
        return $this->formatMovies($this->nowPlayingMovies);
    }

    public function genres()
    {
        return collect($this->genres)->mapWithKeys(function ($genre) {
            return [$genre['id'] => $genre['name']];
        });
    }

    private function formatMovies($movies)
    {
        return collect($movies)->take(18)->map(function($movie) {
            $genresFormatted = collect($movie['genre_ids'])->mapWithKeys(function($value) {
                return [$value => $this->genres()->get($value)];
            })->implode(', ');

            return collect($movie)->merge([
                'poster_path' => 'https://image.tmdb.org/t/p/w500/'.$movie['poster_path'],
                'vote_average' => $movie['vote_average'] * 10 .'%',
                'release_date' => Carbon::parse($movie['release_date'])->format('M d, Y'),
                'genres' => $genresFormatted,
            ])->only([
                'poster_path', 'id', 'genre_ids', 'title', 'vote_average', 'overview', 'release_date', 'genres',
            ]);
        });
    }
}

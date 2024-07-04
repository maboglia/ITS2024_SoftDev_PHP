<?php
include 'Movie.php';

class MovieCtrl{


    public $movies = [];

    public function addMovie($pelicula){
        $this->movies[] =  new Movie($pelicula->titolo, $pelicula->anno, $pelicula->rating, $pelicula->regista);
    }

    public function getMovies(){
        return $this->movies;
    }
    public function getMoviesByRating($min, $max){

        $moviesByRating = [];

        foreach($this->movies as $movie){   
            if ($movie->rating >= $min && $movie->rating <= $max){
                $moviesByRating[] = $movie;
            }

        }

        return $moviesByRating;
    }







}









?>
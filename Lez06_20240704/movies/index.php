<?php

include 'MovieCtrl.php';

$film = file_get_contents('https://raw.githubusercontent.com/maboglia/ProgrammingResources/master/tabelle/film/best-free-yt-movies-rt.json');

$min = $_GET['min'] ?? 0;
$max = $_GET['max'] ?? 100;


$filmPHP = json_decode($film);

$ctrl = new MovieCtrl();

foreach ($filmPHP as $pelicula) {

    $ctrl->addMovie($pelicula);
}




header('Content-Type:application/json');

if ($min>0 && $max < 100)
echo json_encode($ctrl->getMoviesByRating($min, $max));
else
echo json_encode($ctrl->getMovies());



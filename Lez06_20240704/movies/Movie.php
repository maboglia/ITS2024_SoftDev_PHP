<?php


class Movie {

    public $titolo;
    public $anno;
    public $rating;
    public $regista;

    public function __construct($titolo, $anno, $rating, $regista) {
        $this->titolo = $titolo;
        $this->anno = str_replace(['(', ')'], '', $anno );
        $this->rating = str_replace('%','', $rating);
        $this->regista = $regista;
    }

}
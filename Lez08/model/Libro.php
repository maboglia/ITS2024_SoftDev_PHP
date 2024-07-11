<?php

class Libro {

    private $id;
    private $titolo;
    private $pagine;
    private $prezzo;
    private $autore;

    public function &__get($name){
        return $this->$name;
    }

    function __set($name, $value) {
        $this->$name = $value;
    }

}

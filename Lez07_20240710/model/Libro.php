<?php

class Libro{

    private $id;
    private $titolo;

    private $pagine;

    private $prezzo;

    private $autore;

    public function &__get($nomeProprieta){
        return $this->$nomeProprieta;
    }

    public function __set($nomeProprieta,$valoreProprieta){
        $this->$nomeProprieta = $valoreProprieta;
    }

    public function __tostring(){
        return $this->titolo.' '.$this->autore .' '.$this->prezzo ;
    }

}



?>
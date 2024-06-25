<?php


class Studente {

    private $nome;
    private $cognome;

    public function __construct($nome, $cognome) {
        $this->nome = $nome;
        $this->cognome = $cognome;        
    }

    public function __get($variabile){
        return $this->$variabile;
    }

    public function __set($variabile, $value){
        $this->$variabile = $value;
    }

    public function __tostring(){
        return $this->nome .' '. strtoupper($this->cognome);
    }

}













?>
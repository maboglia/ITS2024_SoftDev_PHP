<?php

class Curriculum{

    private $nome;
    private $cognome;

    public function __construct($nome, $cognome){
        $this->nome = $nome;
        $this->cognome = $cognome;
    }

    public function __get($etichetta){
        return $this->$etichetta;
    }

    public function __set($etichetta, $valore){
        $this->$etichetta = $valore;
    }

}

?>
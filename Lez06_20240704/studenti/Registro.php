<?php

include("Studente.php");
include("StudenteView.php");


class Registro {

    private $studenti = array();// []

    public function addStudente($studente){
        $this->studenti[] = $studente;
        // array_push($this->studenti, $studente);
    }

    public function getstudenti() {
        return $this->studenti;
    }

    public function svuotaRegistro(){
        $this->studenti = [];
    }

    public function riempiRegistro() {
        $righe = file('./studenti.csv');

        foreach ($righe as $riga){

            $sotto_stringhe =  explode(',', $riga);

            $studente = new Studente($sotto_stringhe[0],$sotto_stringhe[1],$sotto_stringhe[2] );

            $this->addStudente( $studente );

        }

    }


    public function getStudentiIncantati(){

        $html = '';

        foreach ($this->getstudenti() as $studente) {
           $html .= $this->getStudenteCard($studente)."\n";
        }

        return $html;
    }

    public function getStudenteCard($studente){

        $vista = new StudenteView();

        return $vista->stampaStudente($studente);

    }

}
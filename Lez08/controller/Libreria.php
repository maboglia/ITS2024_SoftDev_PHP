<?php

include_once '../model/Libro.php';
include_once '../services/LibreriaService.php';

if (isset($_POST['titolo'])){

    // $titolo  = $_POST['titolo'];
    // $pagine  = $_POST['pagine'];
    // $prezzo  = $_POST['prezzo'];
    // $autore  = $_POST['autore'];
    $l = new Libreria();
    $l->addLibro($_POST['titolo'], $_POST['pagine'], $_POST['prezzo'], $_POST['autore']);
}




class Libreria {

    private $service;

    public function __construct(){
        $this->service = new LibreriaService();
    }

    public function getLibri(){
        return $this->service->getLibri();
    }

    public function addLibro($titolo, $pagine, $prezzo, $autore){
        $this->service->addLibro($titolo, $pagine, $prezzo, $autore);
    }


}


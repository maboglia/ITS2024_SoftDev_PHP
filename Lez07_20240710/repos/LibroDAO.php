<?php

include_once '../repos/Connessione.php';
include_once '../model/Libro.php';

class LibroDAO {

    private $connessione;
    private $conn;

    public function __construct() {
        $this->connessione = new Connessione();
        $this->conn = $this->connessione->getConn();
    }

    public function getLibri() {

        $res = $this->conn->query('select * from libri');
        $res->setFetchMode(PDO::FETCH_CLASS,'Libro');
        // $res->setFetchMode(PDO::FETCH_OBJ);
        $libri = [];
        while ($record =  $res->fetch()) {
            $libri[] = $record;
        }
        return $libri;
    }




    public function addLibro(Libro $libro) {
        
        $statement = $this->conn->prepare('insert into libri (titolo, pagine, prezzo, autore) 
                                                values (:titolo, :pagine, :prezzo, :autore)');

        $statement->bindParam(':titolo', $libro->titolo, PDO::PARAM_STR);
        $statement->bindParam(':pagine', $libro->pagine, PDO::PARAM_INT);
        $statement->bindParam(':prezzo', $libro->prezzo, PDO::PARAM_STR);
        $statement->bindParam(':autore', $libro->autore, PDO::PARAM_STR);

        try {
            if ($libro->titolo == '') {
                throw new Exception('Ehi metti il titolo!');
            }
            $statement->execute();
            
        } catch (Exception $e) {
            echo $e->getMessage();
        }

    }

}




















<?php
//include_once '../repos/LibroDAOImpl.php';
/*interface LibroDAO {

      addLibro($libro);
     function getLibri();

}
*/

include_once '../model/Libro.php';
include_once '../repos/Connessione.php';

class LibroDAO  {

    private Connessione $connessione;
    private $conn;
    public function __construct() {
        $this->connessione = new Connessione();
        $this->conn = $this->connessione->getConn();
    }


 public function addLibro($libro){

    $query = "INSERT INTO libri (titolo, pagine,prezzo, autore) values (:titolo,:pagine,:prezzo,:autore)";
    $st = $this->conn->prepare($query);

    //collegamento (binding) dei parametri del libro
    $st->bindParam(':titolo', $libro->titolo, PDO::PARAM_STR);
    $st->bindParam(':pagine', $libro->pagine, PDO::PARAM_INT);
    $st->bindParam(':prezzo', $libro->prezzo, PDO::PARAM_STR);
    $st->bindParam(':autore', $libro->autore, PDO::PARAM_STR);

    //esegui istruzione di scrittura
    $st->execute();

 }
    public function getLibri(){

        $query = "SELECT * FROM libri";

        $resultSet = $this->conn->query($query);

        $resultSet->setFetchMode(PDO::FETCH_CLASS, 'Libro');

        $libri = [];

        while ($libro = $resultSet->fetch()) {
           array_push($libri, $libro); 
        }

        return $libri;



    }


}
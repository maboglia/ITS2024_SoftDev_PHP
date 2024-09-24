<?php

include './database/Connessione.php';

class ProdottoDAO {

    private $conn;

    public function __construct(){
        
        $connessione = new Connessione();
        $this->conn = $connessione->getConn();

    }

    public function addProdotto($prodotto){
        $query = "INSERT INTO prodotti (codProdotto, nome, prezzo, quantita)
                    VALUES (:codProdotto,:nome, :prezzo, :quantita)";

        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':codProdotto', $prodotto->codProdotto);
        $stmt->bindParam(':nome', $prodotto->nome);
        $stmt->bindParam(':prezzo', $prodotto->prezzo);
        $stmt->bindParam(':quantita', $prodotto->quantita);

        $stmt->execute();
    }



}
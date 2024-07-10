<?php

class Connessione{

    /*
    private final String URL = "jdbc:mysql://localhost:3307/java";
	private final String USER = "ITS_2024";
	private final String PASS = "bogliaccino";
    */

    private const NOME_DB = "java";
    private const USER = "ITS_2024";
    private const PASS = "bogliaccino";

    private $conn = null;

    public function getConn(){
        if (is_null($this->conn)){
            $this->connetti();
        }

        return $this->conn;
    }

    private function connetti() {
        
        try {
            $this->conn = new PDO( 'mysql:host=localhost:3307;dbname='.self::NOME_DB, self::USER, self::PASS);
        } catch (PDOException $eccezione) {
            echo ''. $eccezione->getMessage();
        }
        
        
    }   

    public function disconnetti() {
        $this->conn = null;
    }
    
}








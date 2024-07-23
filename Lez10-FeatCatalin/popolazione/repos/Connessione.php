<?php
class Connessione{
    private $id;
    private const NOME_DB="java";
    private const USER="root";
    private const PASS= "";

    private $db;
    private $conn=null;
    public function getConn(){
        if(is_null($this->conn)){
            $this->connetti();
        }return $this->conn;
    }
    private function connetti(){
        try{
            $this->conn = new PDO("mysql:host=localhost;dbname=".self::NOME_DB, self::USER, self::PASS);
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
    public function disconnetti(){
        $this->conn=null ;
    }
}


?>
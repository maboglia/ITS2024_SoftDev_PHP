<?php

class Connessione {

    private const URL = 'localhost';
    private const USER = 'root';
    private const PASSW = '';

    private const DB_NAME = 'java';

    private ?PDO $conn=null;


    public function getConn(){
        if(is_null($this->conn)){
            $this->connetti();
        }return $this->conn;
    }
    private function connetti(){
        try{
            $this->conn = new PDO("mysql:host=localhost;dbname=".self::DB_NAME, 
            self::USER, 
            self::PASSW);
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
    public function disconnetti(){
        $this->conn=null ;
    }


}











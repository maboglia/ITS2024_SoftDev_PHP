<?php
include_once("../model/PopolazioneRegione.php");
include_once("../repos/Connessione.php");

class PopolazioneDAO{
    private $connessione;
    private $conn;
    public function __construct() {
        $this->connessione=new Connessione();
        $this->conn=$this->connessione->getConn();
    }

     public function getPaesi(){
        $rs=$this->conn->query("select * from popolazione_italiana_regione");
        $rs->setFetchMode(PDO::FETCH_CLASS,"Popolazione");
        $popolo=[];
        while($record=$rs->fetch()){
            $popolo[]=$record;
        }
        return $popolo;
     }
     public function getRegioni(){
        $rs=$this->conn->query("select distinct regione from popolazione_italiana_regione order by regione");
        $rs->setFetchMode(PDO::FETCH_ASSOC);
        $popolo=[];
        while($record=$rs->fetch()){
            $popolo[]=$record["regione"];
        }
        return $popolo;
     }
     public function getComuniByRegione($regione){
        
        $rs=$this->conn->prepare("select comune from popolazione_italiana_regione where regione like :regione order by comune");
        $rs->bindParam(":regione",$regione,PDO::PARAM_STR);
        $rs->setFetchMode(PDO::FETCH_ASSOC);
        $rs->execute();
        $popolo=[];
        while($record=$rs->fetch()){
            $popolo[]=$record["comune"];
        }
        return $popolo;
     }
     
     public function getComune($comune){
        $rs=$this->conn->prepare("select * from popolazione_italiana_regione where comune like :comune");
        $rs->bindParam(":comune",$comune,PDO::PARAM_STR);
        $rs->setFetchMode(PDO::FETCH_CLASS,"Popolazione");
        $rs->execute();
        return $rs->fetch();
     }


}
?>
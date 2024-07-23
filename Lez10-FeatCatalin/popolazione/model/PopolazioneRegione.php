<?php


class Popolazione{
    private int $id;
    private string $regione;
    private string $comune;
    private int $maschi;
    private int $femmine;
    private int $totale;

    public function __get($nome){
        return $this->$nome;
    }
    public function __set($nome,$value){
        $this->$nome = $value;
    }
    public function serialize(){
        return get_object_vars($this);
    }
    public function __toString()
    {
        return "Regione: ".$this->regione."\ncomune: ".$this->comune."\nMaschi: ".$this->maschi."\nFemmine: ".$this->femmine."\nTotale: ".$this->totale;
    }

}
?>
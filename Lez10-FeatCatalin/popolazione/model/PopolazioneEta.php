<?php
class PopolazioneEta{
    private int $eta;
    private int $maschi;
    private int $femmine;
    private int $totale;

    public function __get($nome){
        return $this->$nome;
    }
    public function __set($nome,$value){
        $this->$nome = $value;
    }
    public function __toString()
    {
        return "Eta: ".$this->eta."\nMaschi: ".$this->maschi."\nFemmine: ".$this->femmine."\nTotale: ".$this->totale;
    }
}
?>
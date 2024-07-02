<?php

class CurriculumCtrl {

    private $curricula = [];

    public function addCurriculum($nome, $cognome) {
        $cv = new Curriculum($nome, $cognome);
        $this->curricula[] = $cv;
    }

    public function getCurricula() {
        return $this->curricula;
    }

    public function salvaCurricula($nome_file){

        $gestore_file = fopen('./files/'. $nome_file,"w");

        foreach ($this->curricula as $cv) {
            fwrite($gestore_file, $cv->nome .",". $cv->cognome ."\n");
        }

        fclose($gestore_file);


    }


}

?>
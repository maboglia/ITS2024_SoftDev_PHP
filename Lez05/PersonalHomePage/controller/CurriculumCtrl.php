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


}

?>
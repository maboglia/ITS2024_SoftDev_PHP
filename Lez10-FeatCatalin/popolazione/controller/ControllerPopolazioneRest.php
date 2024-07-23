<?php
include_once "../repos/PopolazioneRegioneDAO.php";
class ControllerPopolazioneRest{

    public function __construct(private $ctrl=null){
        $this->ctrl= new PopolazioneDAO();
    }
    public function regioni(){
        header("content-type:application/json");
        echo json_encode($this->ctrl->getRegioni());
    }
    public function comuni($regione){
        header("content-type:application/json");
        echo json_encode($this->ctrl->getComuniByRegione($regione));
    }
    public function comune($comune){
        header("content-type:application/json");

        echo json_encode($this->ctrl->getComune($comune)->serialize());
    }



}
$ctrl= new ControllerPopolazioneRest();
if($_GET["action"]=="regioni"){
    $ctrl->regioni();
}
if($_GET["action"]=="comuni"){
    $ctrl->comuni($_GET["regione"]);
}
if($_GET["action"]=="comune"){
    $ctrl->comune($_GET["comune"]);
}



?>
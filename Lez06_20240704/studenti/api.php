<?php

include ("Registro.php");


$ctrl = new Registro();

$ctrl->riempiRegistro();

$studenti = $ctrl->getstudenti();

$studentiJSON = [];

foreach ($studenti as $studente) {
    $studentiJSON[] = $studente->serialize();
}

header("content-type:application/json");
echo json_encode($studentiJSON);
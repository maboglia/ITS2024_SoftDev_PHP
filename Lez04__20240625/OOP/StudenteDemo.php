<?php

include 'Studente.php';

$studenti = file('studenti.txt');
$registro = [];//array vuoto

foreach ($studenti as $rigaStudente) {//per ogni riga

   $parole = explode(',', $rigaStudente);//spezzo la riga

   $registro[] =  new Studente($parole[0], $parole[1]);//creo oggetto studente e aggiungo ad array

}

foreach ($registro as $studente) {
    echo '<h1>' . $studente . '</h1>';
}

?>
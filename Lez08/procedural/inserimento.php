<?php

$file = file_get_contents('https://raw.githubusercontent.com/maboglia/ProgrammingResources/master/tabelle/libri/Biblioteca.csv');
$fileArr = file('https://raw.githubusercontent.com/maboglia/ProgrammingResources/master/tabelle/libri/Biblioteca.csv');

include_once './dati.segreti.php';
$conn = mysqli_connect('localhost', $USER, $PASS, $DB_NAME, 3307);

foreach ($fileArr as $riga) {
    $parole = explode(',', $riga);
    $titolo = addslashes($parole[2]);
    $autore = addslashes($parole[1]);
    $query = "INSERT INTO libri (titolo, autore) values ('{$titolo}','{$autore}')";

    mysqli_query($conn, $query);

}






<?php

include_once("../model/Libro.php");
include_once("../repos/LibroDAO.php");
//print_r($_POST);

$titolo = $_POST['titolo'];
$pagine = $_POST['pagine'];
$prezzo = $_POST['prezzo'];
$autore = $_POST['autore'];

$libro = new Libro();
$libro->titolo = $titolo;
$libro->prezzo = $prezzo;
$libro->autore = $autore;
$libro->pagine = $pagine;

$dao = new LibroDAO();
$dao->addLibro($libro);

print_r($dao->getLibri());
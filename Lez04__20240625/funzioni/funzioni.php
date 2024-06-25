<?php

function createTitle($title, $livello = 1)  {
    return "<h{$livello}>" . $title ."</h{$livello}>";
}

function createPar($par)  {
    return '<p>' . $par .'</p>';
}

function createList($lista)  {
    $lista_puntata = '<ul>';

    foreach ($lista as $item) {
        $lista_puntata .= '<li>' . $item .'</li>';
    }

    $lista_puntata .= '</ul>';
    return $lista_puntata;
}



?>
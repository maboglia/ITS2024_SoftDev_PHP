<?php

$pagina = 'home';

if (  isset($_GET['page']) &&  !empty($_GET['page'])  ){
    $pagina = $_GET['page'];
}


switch ($pagina) {//routing

    case 'gallery':
        echo 'galleria';
        break;

    case 'contatti':
        echo 'contatti';
        break;

    default:
        echo 'home';

}












<?php
ini_set( 'error_reporting', E_ALL );
ini_set( 'display_errors', true );

$pagina = 'home';

if (isset($_GET['page'])  &&   !empty($_GET['page'])){
    $pagina = $_GET['page'];     
}

switch ($pagina) {
    case 'pagina1':
        require("../app/views/pages/pagina1.php");
        echo HOME_PATH_REL."app/views/pages/pagina1.php";
        break;
    
    case 'pagina2':
        include './views/pages/pagina2.php';
        break;
    
    default:
        include './views/pages/home.php';
        break;
}










?>
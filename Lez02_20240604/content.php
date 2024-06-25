<?php

$pagina = 'home';

if (isset($_GET['page']) && !empty($_GET['page'])){
    $pagina = $_GET['page'];
}

//routing - instradamento
switch ($pagina) {
    case 'galleria':
        include './views/gallery.php';
        break;
    case 'contatti':
        include './views/contatti.php';
        break;
    
    default:
        include './views/home.php';
        break;
}

?>


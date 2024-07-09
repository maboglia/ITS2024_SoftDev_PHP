<?php

//faccio partire la sessione
session_start();

//me lo dovevi dire PRIMA

define('TITOLO_SITO', 'Dai un titolo a questo sito');
define('HOME_PATH', __DIR__.'../../public/');
define('HOME_PATH_REL', '/ITS2024_SoftDev_PHP/Master/');
define('CSS_PATH', __DIR__.'../../public/assets/css/');
define('JS_PATH', __DIR__.'../../public/assets/js/');
define('IMG_PATH', __DIR__.'../../public/assets/img/');
define('APP_PATH', __DIR__.'../../app/');

$menu = [//array associativo
    ['etichetta'=> 'Home','collegamento'=> '?'],//0
    ['etichetta'=> 'pagina1','collegamento'=> '?page=pagina1'],//1
    ['etichetta'=> 'pagina2','collegamento'=> '?page=pagina2'],//2
    ['etichetta'=> 'pagina3','collegamento'=> '?page=pagina3'],
    ['etichetta'=> 'pagina4','collegamento'=> '?page=pagina4'],
];


/*




*/









?>
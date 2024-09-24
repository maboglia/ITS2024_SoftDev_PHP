<?php

// spl_autoload_register(function ($class){
    
//     $file = str_replace('\\', '/', $class);
//     $file = str_replace('maboglia/', '', $file);
//     $file = str_replace('app', 'model', $file);
//     $file = './' . $file . '.php';
//     include_once($file);
// });


include './database/ProdottoDAO.php';
include './model/Prodotto.php';
include './controller/ProdottiCtrl.php';

use maboglia\app\Prodotto;
use maboglia\app\ProdottiCtrl;

$p1 = new Prodotto('smartphone usato', 50, 1);
$p2 = new Prodotto('smartphone rubato', 20, 2);
$p3 = new Prodotto('smartphone rotto', 5, 3);

$dao = new ProdottoDAO();

$ctrl = new ProdottiCtrl();

$ctrl->addProdotto($p1);
$ctrl->addProdotto($p2);
$ctrl->addProdotto($p3);

foreach ($ctrl->getProdotti() as $prodotto) {
    echo $prodotto->nome . '<br>';
    $dao->addProdotto($prodotto);
}


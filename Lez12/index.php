<?php

include './model/Prodotto.php';

use maboglia\model\Prodotto;

$p = new Prodotto('smartphone usato', 50, 5);


echo '<pre>';
var_dump($p);
echo '</pre>';





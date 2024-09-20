<?php

    session_start();

    $prodotti = [
        ['nome'=>'Mele', 'prezzo'=>1.9],//0
        ['nome'=>'Pere', 'prezzo'=>2.5],//1
        ['nome'=>'Banane', 'prezzo'=>1.7],//2
        ['nome'=>'Arance', 'prezzo'=>3.3],//3
    ];




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ortofrutta</title>
</head>
<body>
    
    <h1>Prodotti disponibili</h1>

    <ul>
        <?php foreach ($prodotti as $key => $value) { ?>
            
        <li>
            <?=$value['nome']?> <?=$value['prezzo']?> 
            <form action="cart.php" method="post">
                <input type="hidden" name="product_id" value="<?=$value['nome']?>">
                <input type="submit" value="Aggiungi">
            </form>
        </li>

        <?php } ?>
    </ul>

</body>
</html>
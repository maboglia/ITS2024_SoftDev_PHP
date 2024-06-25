<?php include 'configurazione.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=TITOLO?></title>
    <style>
        div#console > div { 
            width: 100px; 
            height: 100px; 
            border: 1px solid red;
            float: left;
        }
        #pulsanti { 
            clear:left;
        }
    </style>
</head>
<body>
    
    <h1><?=TITOLO?></h1>

    <div id="console">
        <div>
            <img id="dado1" src="<?= $img_dado1 ?>" alt="">
        </div>
        <div>
            <img id="dado2" src="<?= $img_dado2 ?>" alt="">
        </div>
    </div>
    <div id="pulsanti">
        <a href="?" id="bottone">Gioca</a>
    </div>

    <h2><?=$risultato?></h2>
    <h2><?=$_SESSION['partite']?></h2>
    <h2><?=$_SESSION['vittorie']?></h2>
        
</body>
</html>
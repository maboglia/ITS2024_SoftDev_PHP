<?php

include_once './dati.segreti.php';
$conn = mysqli_connect('localhost', $USER, $PASS, $DB_NAME, 3307);
$query = "SELECT * FROM libri";
$result = mysqli_query($conn, $query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php  while($row = mysqli_fetch_assoc($result)): ?>

        <h2><?=$row['titolo']?></h2>
        <h3><?=$row['pagine']?></h3>
        <h4><?=$row['prezzo']?></h4>
        <h5><?=$row['autore']?></h5>

    <?php endwhile; ?>    
</body>
</html>
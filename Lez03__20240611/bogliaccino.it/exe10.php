Esercizio 10: Gestione dei Moduli
Crea un semplice modulo HTML con un campo di testo e un pulsante di invio. 
Scrivi uno script PHP che recupera il valore del campo di

<form action="" method="post">
    <input type="text" name="username" id="username">
    <input type="password" name="password" id="password">
    <input type="submit" value="Login">
</form>

<?php

foreach ($_POST as $key => $value) {
    echo "". $key .": ". $value ."";
}

<h2>Stringhe</h2>

<p>
Esercizio 51: Lunghezza di una Stringa
Scrivi una funzione che accetta una stringa e restituisce la sua lunghezza.
</p>

<h3>Soluzione di Ayoub</h3>


<?php
function lunghezza_stringa($str) {
    return strlen($str);
}

$str = "Hello world!";
echo "La lunghezza della stringa è: " . lunghezza_stringa($str);
?>

<hr>
<p>
Esercizio 55: Contare le Parole in una Stringa
Scrivi una funzione che accetta una stringa e conta il numero di parole in essa.
</p>
<h3>Soluzione di Alessandro Ionut Costea</h3>


<?php
    function contaParole($stringa) {
    $numeroParole = str_word_count($stringa);

    return $numeroParole;
    }

    echo "le parole nella frase 'Ayoub troppo forte' sono: " . contaParole('Ayoub troppo forte');
?>

<h2>Date</h2>

<p>
Esercizio 42: Differenza tra Due Date
Crea una funzione che calcola la differenza in giorni tra due date.
</p>

<h3>Soluzione di </h3>



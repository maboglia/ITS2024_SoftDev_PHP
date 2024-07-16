<?php

require_once './config.php';

function errore($codice, $messaggio){
    $data = [
        'status' => $codice,
        'message' => $messaggio
    ];
    header('HTTP/1.0 ' . $messaggio);
    return json_encode($data);
}

function addLibro($libro){
    global $conn;

    $titolo = mysqli_real_escape_string($conn, $libro['titolo']);
    $pagine = mysqli_real_escape_string($conn, $libro['pagine']);
    $prezzo = mysqli_real_escape_string($conn, $libro['prezzo']);
    $autore = mysqli_real_escape_string($conn, $libro['autore']);

    if (empty(trim($titolo))){
        return errore('422', 'Devi inserire un titolo!');
    } elseif (empty(trim($autore))){
        return errore('422', 'Devi inserire autore!');
    } else {
        $query = "INSERT INTO libri (titolo, pagine, prezzo, autore) 
        values ('$titolo', '$pagine', '$prezzo', '$autore')";

        $queryRes = mysqli_query($conn, $query);

        if ($queryRes){

            $data = [
                'status' => 201,
                'message' => 'Risorsa aggiunta con successo'
            ];
            header('HTTP/1.0 ' . '201 Created');
            return json_encode($data);

        } else {
            return errore('500', 'Internal Server Error');
        }
    }

}

function getLibri(){

    global $conn;

    $query = 'SELECT * FROM libri order by rand() limit 15';

    $eseguiQuery = mysqli_query($conn, $query);

    $result = '';

    if (mysqli_num_rows($eseguiQuery) > 0){

        $result = mysqli_fetch_all($eseguiQuery,MYSQLI_ASSOC);
    } 

    return $result;

}

function getLibro(){

}

function updateLibro(){
    
}

function deleteLibro(){

}





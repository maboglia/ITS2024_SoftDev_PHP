<?php





$username =  $_GET['username'] ?? 'nobody' ;
$password = isset( $_GET['password']) ? $_GET['password'] : '' ;



foreach ( $_GET as $chiave => $valore ){
    echo $chiave . ": " . $valore;
    echo '<br>'; 

}

/*
$loggato = checkLogin($username, $password);

function checkLogin($username, $password) {
    
    if ($username=='mauro' && $password == '12345'){
        return true;
    } 
    
    return false;
    

}

if ($loggato){
    header('Location:http://www.bogliaccino.it');
} else {
    header('Location:https://www.google.it');
}
*/
?>

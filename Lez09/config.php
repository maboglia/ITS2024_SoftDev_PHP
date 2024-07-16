<?php

error_reporting(0);

$host = 'localhost:3307';
$user = 'ITS_2024';
$pass = 'bogliaccino';
$db_name = 'java';

$conn = mysqli_connect($host, $user, $pass, $db_name);

//var_dump($conn);

if ($conn){
    //echo "sei connesso";
} else {
    die('NON connesso ' . mysqli_error($conn));
}


?>
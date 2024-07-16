<?php

require_once './functions.php';

header('Access-Control-Allow-Origin:*');//CORS
header('Content-Type:application/json');
header('Access-Control-Allow-Method:POST');
header('Access-Control-Allow-Headers:Content-Type, Access-Control-Allow-Headers, Authorization, x-request-with');

$requestMethod = $_SERVER['REQUEST_METHOD'];

if ($requestMethod == 'POST'){

    $inputData = json_decode(file_get_contents("php://input"), true);
    $libro = '';
    if (empty($inputData)){
        $libro = addLibro($_POST);
    } else {
        $libro = addLibro($inputData);
    }

    if ($libro['status'] == 201){
        header('HTTP/1.0 ' . '201 Created');
        echo $libro;
    } else {
        header('HTTP/1.0 ' . '500 Record non inserito - Server Error'); 
        echo $libro;
    }


} else {
   
    $data = [
        'status' => 405,
        'message' => $requestMethod. ' Method Not Allowed'
    ];
    header('HTTP/1.0 405 Method Not Allowed');
    echo json_encode($data);

}
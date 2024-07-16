<?php

require_once './functions.php';

header('Access-Control-Allow-Origin:*');//CORS
header('Content-Type:application/json');
header('Access-Control-Allow-Method:GET');
header('Access-Control-Allow-Headers:Content-Type, Access-Control-Allow-Headers, Authorization, x-request-with');

$requestMethod = $_SERVER['REQUEST_METHOD'];

if ($requestMethod == 'GET'){

    $result = getLibri();

    if (!empty($result)){
        $data = [
            'status' => 200,
            'message' => 'Full list of books',
            'data' => $result
        ];
        header('HTTP/1.0 200 OK');
        echo json_encode($data);

    } else {
        $data = [
            'status' => 404,
            'message' => $requestMethod. ' No resources found'
        ];
        header('HTTP/1.0 404 No resources found');
        echo json_encode($data);

    }



} else {
   
    $data = [
        'status' => 405,
        'message' => $requestMethod. ' Method Not Allowed'
    ];
    header('HTTP/1.0 405 Method Not Allowed');
    echo json_encode($data);

}
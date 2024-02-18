<?php
header("Access-Control-Allow-Origin:*");
header("Content-Type: application/json");
header("Access-Control-Allow-Method: GET");
header("Access-control-Allow-Headers: Content-Type,Access-Control-Allow-Headers, Authorization, X-Request-");

include("./function.php");

$requestMethod = $_SERVER['REQUEST_METHOD'];

if($requestMethod == "GET"){
    $customerList = getCustomer();
    echo $customerList;
}else{
    $data = [
        'status' => 405,
        "message" => $requestMethod . "Method is not Allowed",
    ];
    header("HTTP/1.0 405 Method not Allowed");
    echo json_encode($data);
}

?>
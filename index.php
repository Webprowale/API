<?php
// Add these lines to the top of your PHP file
header("Access-Control-Allow-Origin: *");
header("content-Type:application/json");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Headers: Content-Type, Access-control-Allow_Headers, Authorization,X-Request-");

$requestMethod = $_SERVER["REQUEST_METHOD"];
if($requestMethod== "GET"){
    $users = getUsers();
    echo $users;
}
else{
    $data = [
        "status" => 405,
        "message" =>$requestMethod . "Method Not Allowed",
    ];
     header("HTTP/1.0 405 Method is Not Allowed");
    echo json_encode($data);
}
?>

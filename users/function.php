<?php

require '../inc/dbcon.php';
function getUsers(){
 global $conn;
 $query = " SELECT * from users";
 $query_run = mysqli_query($conn, $query);
 if($query_run){
      if(mysqli_num_rows($query_run) > 0){
      $res = mysqli_fetch_all($query_run, MYSQLI_ASSOC);

      $data = [
        "status" => 200,
        "message" =>"Users Been Fetched Successfully",
        "data" => $res
      ];
    header("HTTP/1.0 200 Users Been Fetched Successfully");
    return json_encode($data);

      }else{

        $data = [
            "status" => 404,
            "message" =>"No Users Found"
        ];
        header("HTTP/1.0 404 Method is Not Allowed");
        return json_encode($data);
    
      }
 }
    else{
    
    $data = [
        "status" => 500,
        "message" =>"Internal Server Error"
    ];
    header("HTTP/1.0 500 Internal Server Error");
    return json_encode($data);
    }
 
}
?>
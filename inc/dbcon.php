<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname ="reactcrud";

$conn = mysqli_connect($host, $username, $password, $dbname);
if(!$conn){
    die("connecton failed: " . mysqli_connect_error());
}
?>
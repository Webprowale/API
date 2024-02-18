<?php
 $host = "localhost";
 $username = "root";
 $pass = "";
 $dbname = "reactcrud";
 
 $conn = mysqli_connect($host, $username, $pass, $dbname);
 if(!$conn){
    die("connection failed". mysqli_connect_error());
 }
?>
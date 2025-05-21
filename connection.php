<?php
error_reporting(0);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if($conn){
    echo "connection successful";
}
else{
    echo "connection failled".mysqli_connect_error(); 
}
?>
<?php
$servername="localhost";
$username="root";
$dbname="mise_en_situation";
$password="";

$conn= new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
    die("ERROR" . $conn->connect_error);
    exit();
}


?>
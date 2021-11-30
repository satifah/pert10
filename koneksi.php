<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "dabar";

$kon = mysqli_connect($host, $user, $password, $database);

if(mysqli_connect_errno()){
    echo "error Connected ". mysqli_connect_error();
    exit();
}

?>
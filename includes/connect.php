<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "zaka";
$connection = mysqli_connect($host, $username, $password,$database);
if($connection)
{
    echo "connected";
}else{
    echo "not connected";
}




?>
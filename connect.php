<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "final";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if($conn){
    //echo "Connection OK";
}
else
{
    echo "Connection Error".mysqli_connect_error();
}
?>
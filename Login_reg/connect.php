<?php 

$host = "localhost";
$user = "root"; 
$password = "";
$db = "login";  // database name
$connect = mysqli_connect($host, $user, $password, $db);
if($connect->connect_error){
    echo "Connection failed".$connect->connect_error;
} else {
    echo "Connected successfully";

}
    ?>
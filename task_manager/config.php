<?php
$host = "localhost";//Server name
$username = "root";// Default username in XAMPP
$password = "";// Default password in XAMPP
$dbname = "task_manager_db";// Database name

// Create connection
$conn = new mysqli($host, $username, $password, $dbname);

//Check connection
if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}



?>

<?php


$host = 'localhost';      
$user = 'root';  
$pass = '';  
$db   = 'company_web';  


$connection = new mysqli($host, $user, $pass, $db);


if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

// Optional: echo success message for testing
// echo "Connected successfully!";
?>

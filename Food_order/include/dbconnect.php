<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "php_food_order";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
 
?>
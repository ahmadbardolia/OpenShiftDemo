<?php
$servername = "127.4.84.130";
$username = "admin841kCjI";
$password = "PGgsSU6QD9J3";
$dbname = "CRM_1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 


?>
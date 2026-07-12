<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "Industrail_Training";

// Create connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
}

 //echo "Database Connected Successfully";

?>
<?php
$servername = "localhost:5000"; 
$username = "root"; 
$password = "";
$dbname = "avito_database";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Set UTF-8 character set
$conn->set_charset("utf8");


?>  
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crud1_php";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    echo "Connection failed: " . $conn->connect_error;
}else{
    // echo "successfully connection establish";
}

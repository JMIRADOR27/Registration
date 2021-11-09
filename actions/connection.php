<?php
$serverip = "localhost";
$username = "root";
$password = "";
$dbname = "registration";

// Create connection
global $conn;
$conn = new mysqli($serverip, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>
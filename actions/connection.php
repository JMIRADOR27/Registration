<?php
$serverip = "localhost";
$username = "mkadmin";
$password = "M@int@N@nc3";
$dbname = "register_db";

// Create connection
global $conn;
$conn = new mysqli($serverip, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>
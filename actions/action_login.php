<?php
include 'function.php';
$username = $conn->real_escape_string($_POST['username']);
$password = $conn->real_escape_string($_POST['password']);

Login($username,$password);

$arrayData = array("status" => $status, "message" => $message);

echo json_encode($arrayData);


?>
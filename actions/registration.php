<?php
include 'function.php';
$fname = $conn->real_escape_string($_POST['fname']);
$lname = $conn->real_escape_string($_POST['lname']);
$mname = $conn->real_escape_string($_POST['mname']);
$cnumber = $_POST['cnumber'];
$age = $_POST['age'];
$email = $conn->real_escape_string($_POST['email']);

insertRegistrants($fname, $lname,$mname,$age,$cnumber,$email);


$arrayData = array("status" => $status);

echo json_encode($arrayData);


?>
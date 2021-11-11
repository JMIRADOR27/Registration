<?php
include 'function.php';
$fname = $conn->real_escape_string($_POST['fname']);
$lname = $conn->real_escape_string($_POST['lname']);
$mname = $conn->real_escape_string($_POST['mname']);
$cnumber = $_POST['cnumber'];
$age = $_POST['age'];
$email = $conn->real_escape_string($_POST['email']);
$address = $conn->real_escape_string($_POST['address']);
$RFID = $conn->real_escape_string($_POST['rfid']);
$device = $conn->real_escape_string($_POST['device']);


if(emailValidation($email)){
insertRegistrants($fname, $lname,$mname,$age,$cnumber,$email,$address,$RFID,$device);
}else{
    $status = 3;
    $message = "Email Already Exist";
}

$arrayData = array("status" => $status, "message" => $message);

echo json_encode($arrayData);


?>
<?php
include 'function.php';
$fname = $conn->real_escape_string($_POST['fname']);
$lname = $conn->real_escape_string($_POST['lname']);
$mname = $conn->real_escape_string($_POST['mname']);
$cnumber = $_POST['cnumber'];
$age = $_POST['age'];
$email = $conn->real_escape_string($_POST['email']);
$birthday = $_POST['birthday'];
$address = $conn->real_escape_string($_POST['address']);
$RFID = $conn->real_escape_string($_POST['rfid']);


if(emailValidation($email)){
insertRegistrants($fname, $lname,$mname,$age,$birthday,$cnumber,$email,$address,$RFID);
}else{
    $status = 3;
    $message = "Email Already Exist";
}

$arrayData = array("status" => $status, "message" => $message);

echo json_encode($arrayData);


?>
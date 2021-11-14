<?php
include 'function.php';
$fname = $conn->real_escape_string($_POST['fname']);
$lname = $conn->real_escape_string($_POST['lname']);
$cnumber = $_POST['cnumber'];
$age = $_POST['age'];
$email = $conn->real_escape_string($_POST['email']);
$device = $conn->real_escape_string($_POST['device']);
$captcha=$conn->real_escape_string($_POST['g-recaptcha-response']);


$secretKey = "6LeGJjMdAAAAAPAjnhrhl8uvaAQayuUX85mCdLl7";
$ip = $_SERVER['REMOTE_ADDR'];
// post request to server
$url = 'https://www.google.com/recaptcha/api/siteverify?secret=' . urlencode($secretKey) .  '&response=' . urlencode($captcha);
$response = file_get_contents($url);
$responseKeys = json_decode($response,true);
if($captcha){
if($responseKeys["success"]){
if (emailValidation($email)) {
    insertRegistrants($fname, $lname, $age, $cnumber, $email, $device);
} else {
    $status = 3;
    $message = "Email Already Exist";
}
}else{
    $message = "Invalid Captcha";
}
}else{
    $message = "Please check the the captcha form";
}

$arrayData = array("status" => $status, "message" => $message);

echo json_encode($arrayData);

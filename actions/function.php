<?php
// use PHPMailer\PHPMailer\PHPMailer;

// require_once "PHPMailer/PHPMailer.php";
// require_once "PHPMailer/SMTP.php";
// require_once "PHPMailer/Exception.php";

//connection
include 'connection.php';
//status 0 default
$status = 0;
$message = '';

function insertRegistrants($fname, $lname, $mname, $age, $cnumber, $email, $address, $RFID, $device)
{
	global $status, $conn, $message;

	// $username = $fname[0].$lname.mt_rand(2000,9000);
	// $alphabet = 'abcdefghijklmnopqrstuvwxyz1234567890';
	// $pass = array(); //remember to declare $pass as an array
	// $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
	// for ($i = 0; $i < 8; $i++) {
	//     $n = rand(0, $alphaLength);
	//     $pass[] = $alphabet[$n];
	// }
	// $password = implode($pass);

	$stmt = $conn->prepare('INSERT INTO registrants (first_name, last_name, middle_name, age, contact_number, email,RFID,address,device) VALUES (?,?,?,?,?,?,?,?,?)');

	// using prepared statement several times with different variables
	if (
		$stmt &&
		$stmt->bind_param('sssiissss', $fname, $lname, $mname, $age, $cnumber, $email, $RFID, $address, $device) &&
		$stmt->execute()
	) {
		// if(emailer($email)){
		$status = 1;
		$message = "Successfully Registered";
		// }else{
		//  $status = 0;
		//  $message = "Failed to sent email verification.";
		// }
	} else {
		$status = 0;
		$message = 'Registration Failed';
	}
}

function emailValidation($email)
{
	global $conn;
	$stmtresult = $conn->prepare('SELECT email FROM registrants WHERE email= ?');
	$stmtresult->bind_param('s', $email);
	$stmtresult->execute();
	$arr = $stmtresult->get_result()->fetch_all(MYSQLI_ASSOC);
	if (!$arr) {
		return 1;
	} else {
		return 0;
	}
}

function Login($username, $password)
{
	global $conn, $status, $message;
	session_start();
	$stmt = $conn->prepare('SELECT id,username FROM admin WHERE username=? AND password=?');
	$stmt->bind_param('ss', $username, $password);
	$stmt->execute();
	$result = $stmt->get_result();
	if ($row = $result->fetch_assoc()) {
		$_SESSION['id'] = $row['id'];
		$_SESSION['uname'] = $row['username'];
		return $status = 1;
	} else {
		return $message = "Incorrect username and password";
	}
}


function emailer($email)
{
	// $mail = new PHPMailer;
	// $mail->isSMTP();
	// $mail->Host = "smtp.gmail.com"; // use $mail->Host = gethostbyname('smtp.gmail.com'); // if your network does not support SMTP over IPv6
	// $mail->Port = 587; // TLS only
	// $mail->SMTPSecure = 'tls'; // ssl is depracated
	// $mail->SMTPAuth = true;
	// $mail->Username = "Email";
	// $mail->Password = "Password";
	// $mail->setFrom("Youremail@gmail.com");
	// $mail->addAddress($email);
	// $mail->Subject = 'PHPMailer GMail SMTP test';
	// $mail->msgHTML("test body"); //$mail->msgHTML(file_get_contents('contents.html'), __DIR__); //Read an HTML message body from an external file, convert referenced images to embedded,
	// $mail->AltBody = 'HTML messaging not supported';
	// // $mail->addAttachment('images/phpmailer_mini.png'); //Attach an image file

	// if(!$mail->send()){
	// 	echo "Mailer Error: " . $mail->ErrorInfo;
	// }else{
	// 	echo "Message sent!";
	// }
}

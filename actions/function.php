<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';


//connection
include 'connection.php';
//status 0 default
$status = 0;
$message = '';

function insertRegistrants($fname, $lname, $age, $cnumber, $email, $device)
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
	
	$verification_token = password_hash($email, PASSWORD_DEFAULT);

	$stmt = $conn->prepare('INSERT INTO registrants (first_name, last_name, age, contact_number, email,device,verification_token) VALUES (?,?,?,?,?,?,?)');

	// using prepared statement several times with different variables
	if (
		$stmt &&
		$stmt->bind_param('ssiisss', $fname, $lname, $age, $cnumber, $email, $device,$verification_token) &&
		$stmt->execute()
	) {
		if(emailer($email)){
		$status = 1;
		$message = "Successfully Registered";
		}else{
		 $status = 0;
		 $message = "Failed to sent email verification.";
		}
	} else {
		$status = 0;
		$message = 'Registration Failed';
	}
}

function emailValidation($email){
	global $conn;
	$stmtresult = 'SELECT email FROM registrants WHERE email="'.$email.'"';
	$result=mysqli_query($conn,$stmtresult);
	
	if(mysqli_num_rows($result) <= 0){
		return 1;
	}else{
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
	$mail = new PHPMailer();
	try{
 //Server settings
    // $mail->SMTPDebug = 3;                                       // Enable verbose debug output
    // $mail->isSMTP();                                            // Set mailer to use SMTP
    $mail->Host       = 'smtp.gmail.com';                       // Specify main and backup SMTP servers
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'drivehub001@gmail.com';                // SMTP username
    $mail->Password   = 'Justice#928110..';                     // SMTP password
    $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, [ICODE]ssl[/ICODE] also accepted
    $mail->Port       = 587;                                    // TCP port to connect to
 
    //Recipients
    $mail->setFrom('drivehub@mptc.com.ph', 'noreply-drivehub.com.ph');
    $mail->addReplyTo('drivehub001@gmail.com');
    $mail->addAddress($email);     // Add a recipient

 
    // Attachments
    // $mail->addAttachment('/home/cpanelusername/attachment.txt');         // Add attachments
    // $mail->addAttachment('/home/cpanelusername/image.jpg', 'new.jpg');    // Optional name
 
    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body    = 'This is the HTML message body <a href="https://drivehub.mptc.com.ph/register/actions/function.php?email='.$email.'&code='.password_hash($email, PASSWORD_DEFAULT).'">
    <b>Click this link to verify</b></a>';
    $mail->send();
	if(!$mail->send()){
		$status = 0;
        $message = "Verification could not be sent.";
	}else{
	    return true;
	}
 
    } catch (Exception $e) {
        $status = 0;
        $message = "Verification could not be sent.";
    }


}

 //check if the get variable exists
    if (isset($_GET['email']) && isset($_GET['code']))
    {
        verificationEmail($_GET['email'] , $_GET['code']);
    }

function verificationEmail($email,$hash){
    global $conn;
    
    if(password_verify($email, $hash)){
        $sql = "UPDATE registrants SET email_verification='1' WHERE email='".$email."'";

        if ($conn->query($sql) === TRUE) {
                echo '<script type="text/javascript">'; 
                echo 'alert("Email Successfully Verified");'; 
                echo 'window.location.href = "https://drivehub.mptc.com.ph/register";';
                echo '</script>';
        } else {
          echo '<script type="text/javascript">'; 
                echo 'alert("Expired");'; 
                echo 'window.location.href = "https://drivehub.mptc.com.ph/register";';
                echo '</script>';
        }
    }else{
         echo '<script type="text/javascript">'; 
                echo 'alert("Invalid Verification");'; 
                echo 'window.location.href = "https://drivehub.mptc.com.ph/register";';
                echo '</script>';
    }
    
    
}


<?php
ini_set('display_errors', 1);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
// use Twilio\Rest\Client;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
// require 'vendor/autoload.php';


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
        $stmt->bind_param('ssiisss', $fname, $lname, $age, $cnumber, $email, $device, $verification_token) &&
        $stmt->execute()
    ) {
        if (emailer($email, $fname)) {
            // 		if(sms($cnumber)){
            $status = 1;
            $message = "Thank you for registering! You will receive an email verification which will be sent to $email. Kindly also check your spam inbox should you not see the email on your inbox.";
            // 		}else{
            // 		 $status = 0;
            // 		 $message = "Failed to sent sms notification.";
            // 		}
        } else {
            $status = 0;
            $message = "Failed to sent email verification.";
        }
    } else {
        $status = 0;
        $message = 'Registration Failed';
    }
}

function emailValidation($email)
{
    global $conn;
    $stmtresult = 'SELECT email FROM registrants WHERE email="' . $email . '"';
    $result = mysqli_query($conn, $stmtresult);

    if (mysqli_num_rows($result) <= 0) {
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


function emailer($email, $fname)
{
    $mail = new PHPMailer();
    try {
        //Server settings
        // $mail->SMTPDebug = 3;                                       // Enable verbose debug output
        // $mail->isSMTP();                                            // Set mailer to use SMTP
        $mail->Host       = 'outlook.office365.com';                       // Specify main and backup SMTP servers
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->Username   = 'noreply-drivehub@mptc.com.ph';                // SMTP username
        $mail->Password   = 'DriveHub@2021';                     // SMTP password
        $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, [ICODE]ssl[/ICODE] also accepted
        $mail->Port       = 587;                                    // TCP port to connect to

        //Recipients
        $mail->setFrom('noreply-drivehub@mptc.com.ph', 'noreply-drivehub@mptc.com.ph');
        $mail->addReplyTo('noreply-drivehub@mptc.com.ph');
        $mail->addAddress($email);     // Add a recipient


        // Attachments
        // $mail->addAttachment('/home/cpanelusername/attachment.txt');         // Add attachments
        // $mail->addAttachment('/home/cpanelusername/image.jpg', 'new.jpg');    // Optional name

        // Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'Verify your email address to begin your registration with DriveHub';
        $mail->Body    = '<table align="center" cellpadding="0" cellspacing="0" height="100%" style="border-collapse:collapse!important"
width="100%">
<tbody>
<tr>
<td align="center" bgcolor="#f0f0f0"
style="border-collapse:collapse;background-color:#f0f0f0;padding-top:64px;padding-bottom:32px"
valign="top" width="100%">
<center>
<table cellpadding="0" cellspacing="0" style="border-collapse:collapse!important;max-width:600px"
    width="100%">
    <tbody>
        <tr>
            <td style="border-collapse:collapse;background:#fff;width:100%;max-width:600px"
                width="100%">
                <center>
                    <table cellpadding="0" cellspacing="0" height="100%"
                        style="border-collapse:collapse!important;max-width:600px" width="100%">
                        <tbody>
                            <tr>
                                <td align="center" height="64"
                                    style="border-collapse:collapse;max-width:600px;max-height:64px;padding:20px 0 20px;text-align:center"
                                    valign="top" width="100%">
                                    <a href="https://mptc.com.ph/" rel="nofollow"
                                        style="display:inline-block;margin:0 auto"
                                        target="_blank">
                                        <img src="https://drivehub.mptc.com.ph/register/images/logo-2.png"
                                            width="148" class="CToWUd">
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td align="center" height=""
                                    style="border-collapse:collapse;max-width:600px;padding:0 0 28px 0;text-align:center"
                                    valign="top" width="100%">
                                    <h2
                                        style="font-family:\'Open Sans\',sans-serif!important;font-weight:bold!important;margin:0;color:#252525;font-size:30px;text-align:center">
                                        We need to verify your email address
                                    </h2>
                                </td>
                            </tr>
                            <tr>
                                <td align="justify"
                                    style="border-collapse:collapse;max-width:600px;padding:0 0 28px 0;text-align:justify"
                                    valign="top" width="100%">
                                    <p align="justify"
                                        style="display:block;font-family:\'Red Hat Text\',sans-serif;color:#252525;padding:0 70px;margin:0;font-size:17px">

                                        Dear '.ucfirst($fname).',<br><br>
                                        Welcome to DriveHub, your travel companion app, In order to get started, you need to confirm your email address.  Once email address is confirmed, you will receive the download link to DriveHub within a few hours.
                                    </p>
                                </td>
                            </tr>

                            <tr>
                                <td align="center"
                                    style="border-collapse:collapse;max-width:600px;text-align:center;padding:0 0 28px 0"
                                    valign="top">
                                    <a href="https://drivehub.mptc.com.ph/register/actions/function.php?email=' . $email . '&code=' . password_hash($email, PASSWORD_DEFAULT) . '"
                                        style="border-radius:12px;background-color:#0b4b88;display:inline-block;text-align:center;padding:14px 0;min-width:200px;text-decoration:none;color:#fff;font-family:\'Red Hat Display\',sans-serif!important;font-weight:500!important;font-size:15px!important"
                                        target="_blank">
                                        Verify email address
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td align="center"
                                    style="border-collapse:collapse;max-width:600px;padding:0 0 35px 0;text-align:center"
                                    valign="top" width="100%">
                                    <p
                                        style="font-family:\'Red Hat Text\',sans-serif;color:#b4b4b4;padding:0 70px;margin:0;text-align:center;font-size:15px">
                                        If you did not create an account on DriveHub, please ignore this email.
                                    </p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </center>
            </td>
        </tr>

    </tbody>
</table>
</center>
</td>
</tr>
</tbody>
</table>';
        // $mail->send();
        if (!$mail->send()) {
            $status = 0;
            $message = "Verification could not be sent.";
        } else {
            return true;
        }
    } catch (Exception $e) {
        $status = 0;
        $message = "Verification could not be sent.";
    }
}

//check if the get variable exists
if (isset($_GET['email']) && isset($_GET['code'])) {
    verificationEmail($_GET['email'], $_GET['code']);
}

function verificationEmail($email, $hash)
{
    global $conn;
    $email = $conn->real_escape_string($email);
    if (password_verify($email, $hash)) {
        $sql = "SELECT first_name FROM registrants WHERE email='" . $email . "' AND email_verification = '2'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $fname = $row['first_name'];
            }
            $sql = "UPDATE registrants SET email_verification='1' WHERE email='" . $email . "'";

            if ($conn->query($sql) === TRUE) {

                // EmailForDownloadApp($email, $fname);
            } else {
                echo '<script type="text/javascript">';
                echo 'alert("Expired");';
                echo 'window.location.href = "https://drivehub.mptc.com.ph/register";';
                echo '</script>';
            }
        } else {
            echo '<script type="text/javascript">';
            echo 'alert("Invalid Verification");';
            echo 'window.location.href = "https://drivehub.mptc.com.ph/register";';
            echo '</script>';
        }
    } else {
        echo '<script type="text/javascript">';
        echo 'alert("Invalid Verification");';
        echo 'window.location.href = "https://drivehub.mptc.com.ph/register";';
        echo '</script>';
    }
}

function EmailForDownloadApp($email, $fname)
{
    $mail = new PHPMailer();
    try {
        //Server settings
        // $mail->SMTPDebug = 3;                                       // Enable verbose debug output
        // $mail->isSMTP();                                            // Set mailer to use SMTP
        $mail->Host       = 'outlook.office365.com';                       // Specify main and backup SMTP servers
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->Username   = 'noreply-drivehub@mptc.com.ph';                // SMTP username
        $mail->Password   = 'DriveHub@2021';                     // SMTP password
        $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, [ICODE]ssl[/ICODE] also accepted
        $mail->Port       = 587;                                    // TCP port to connect to

        //Recipients
        $mail->setFrom('noreply-drivehub@mptc.com.ph', 'noreply-drivehub@mptc.com.ph');
        $mail->addReplyTo('noreply-drivehub@mptc.com.ph');
        $mail->addAddress($email);     // Add a recipient


        // Attachments
        // $mail->addAttachment('/home/cpanelusername/attachment.txt');         // Add attachments
        // $mail->addAttachment('/home/cpanelusername/image.jpg', 'new.jpg');    // Optional name

        // Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'You\'re In. You can download DriveHub now';
        $mail->Body    = 'Dear ' . ucfirst($fname) . ', <br>You’re In!<br><br>
    Welcome to the exclusive group of first-generation users of DriveHub, your Travel Companion App. We aim to make your travel hassle-free and safe and your experiences memorable. <br><br>
    To get things started, download DriveHub HERE <a href="https://play.google.com/store/apps/details?id=com.outsystemsenterprise.mptc.DriveHub"><b>CLICK TO DOWNLOAD</b></a>, When exploring DriveHub, don’t forget to check your RFID balance, navigate the the Reload RFID Balance feature, test the traffic advisory service, calculate your toll fee and discover rest and facility areas en route to your destination.
    <br><br>And last but not the least, tell us what you think about the app. In the next few days, you will receive an email from us containing a link to survey about DriveHub. Remember, P300 worth of RFID load awaits the FIRST 100 people to download DriveHub and complete this survey.<br><br>Download DriveHub now<br><br>Thanks,<br>DriveHub Team';
        // $mail->send();
        if (!$mail->send()) {
            $status = 0;
            $message = "Error!.";
        } else {
            echo '<script type="text/javascript">';
            echo 'alert("Email Successfully Verified");';
            echo 'window.location.href = "https://drivehub.mptc.com.ph/register/success.php";';
            echo '</script>';
        }
    } catch (Exception $e) {
        $status = 0;
        $message = "Error!";
    }
}

function sms($cnumber)
{
    // Your Account SID and Auth Token from twilio.com/console
    $account_sid = 'ACabfb494c940cbe660d441f4d4a95c7e5';
    $auth_token = 'e24136c00a6ab2477890660ce311163c';
    // In production, these should be environment variables. E.g.:
    // $auth_token = $_ENV["TWILIO_AUTH_TOKEN"]

    // A Twilio number you own with SMS capabilities
    $twilio_number = "+19088609757";

    $client = new Client($account_sid, $auth_token);
    $client->messages->create(
        // Where to send a text message (your cell phone?)
        '+' . $cnumber,
        array(
            'from' => $twilio_number,
            'body' => 'I sent this message for notification of registeration'
        )
    );
    return true;
}

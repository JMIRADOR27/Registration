<?php
ini_set('display_errors', 1);
require 'vendor/autoload.php';
use Twilio\Rest\Client;

// Your Account SID and Auth Token from twilio.com/console
$account_sid = 'ACabfb494c940cbe660d441f4d4a95c7e5';
$auth_token = 'e24136c00a6ab2477890660ce311163c';
// In production, these should be environment variables. E.g.:
// $auth_token = $_ENV["TWILIO_AUTH_TOKEN"]

// A Twilio number you own with SMS capabilities
$twilio_number = "+19088609757";
$twilio_to = "+639662158058";

$client = new Client($account_sid, $auth_token);
$client->messages->create(
    // Where to send a text message (your cell phone?)
    $twilio_to,
    array(
        'from' => $twilio_number,
        'body' => 'Congratulations! You are among the selected few to be the FIRST in the country to download and test Metro Pacific Tollways’ DRIVE HUB travel companion app! 

To participate, download the Drive Hub app on the Play Store and sign up as a user. Follow the mechanics here: https://drivehub.mptc.com.ph/register/. Answer the survey to detail your experience with the app once done. In return for participating in this quick test, the first 100 Android users to download the app and to answer a survey will receive P300 worth of EasyTrip Load! Drive safe!
'
    )
);
?>
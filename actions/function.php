<?php
//connection
include 'connection.php';
//status 0 default
$status = 0;



function insertRegistrants($fname, $lname,$mname,$age,$cnumber,$email) {
    global $status,$conn;
	$stmt = $conn->prepare('INSERT INTO registrants (first_name, last_name, middle_name, age, contact_number, email) VALUES (?,?,?,?,?,?)');

	// using prepared statement several times with different variables
	if (
		$stmt &&
		$stmt->bind_param('sssiis', $fname, $lname,$mname,$age,$cnumber,$email) &&
		$stmt->execute()
	) {
	 	$status = 1;
	}

}
?>
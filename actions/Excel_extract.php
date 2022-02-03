<?php

include 'connection.php';

$sql2 = "SELECT *,CASE WHEN email_verification = 1 THEN 'Verified User' ELSE 'Unverified User' END as email_verification  FROM registrants WHERE email_verification = 1 AND extracted_data IS NULL";
$stmt1 = $conn->query($sql2);

$sqlupdate = "UPDATE registrants set extracted_data = 1 where email_verification = 1 and extracted_data is null";

$sql = $conn->query($sqlupdate);
$conn->query($sql);

?>

<!DOCTYPE html>
<html>

<head>
	<title></title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js">
	</script>
	<script src="../js/jquery.table2excel.js"></script>
</head>

<body>
	<table id="myTable" class="table2excel" style="display:none">
		<tr>
			<th>Registration date</th>
			<th></th>
			<th>Last Name</th>
			<th>First Name</th>
			<th></th>
			<th>Email</th>
			<th>Contact Number</th>
			<th>Age</th>
		</tr>
		<?php
		while ($row1 = $stmt1->fetch_array(MYSQLI_ASSOC)) {


		?>
			<tr>
				<td><?php echo date("m/d/Y H:i", strtotime($row1['date_register'] . ' + 14 hours')); ?></td>
				<td></td>
				<td><?php echo $row1['last_name']; ?></td>
				<td><?php echo $row1['first_name']; ?></td>
				<td></td>
				<td><?php echo $row1['email']; ?></td>
				<td><?php echo $row1['contact_number']; ?></td>
				<td><?php echo $row1['age']; ?></td>

			</tr>
		<?php } ?>
	</table>

	<script>
		$(function() {
			$("#myTable").table2excel({
				name: "Download all",
				//  include extension also
				filename: "Download_registrants.xls",

				// 'True' is set if background and font colors preserved
				preserveColors: false
			});
			window.location.href = "../dashboard.php";

		});
	</script>
</body>

</html>
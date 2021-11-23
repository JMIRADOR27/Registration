<?php

include 'connection.php';

$sql2="SELECT *,CASE WHEN email_verification = 1 THEN 'Verified User' ELSE 'Unverified User' END as email_verification  FROM registrants WHERE email_verification = 1 AND extracted_data IS NULL";
$stmt1 = $conn->query($sql2);

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
			<th>First Name</th>
            <th>Last Name</th>
            <th>Middle Name</th>
            <th>Email</th>
            <th>Contact Number</th>
            <th>Age</th>
            <th>Registration date</th>
			</tr>
			<?php
            while ($row1 = $stmt1 -> fetch_array(MYSQLI_ASSOC)) {
            ?>
			<tr>
				<td><?php echo $row1['first_name']; ?></td>
                <td><?php echo $row1['last_name']; ?></td>
                <td><?php echo $row1['middle_name']; ?></td>
                <td><?php echo $row1['email']; ?></td>
                <td><?php echo $row1['contact_number']; ?></td>
                <td><?php echo $row1['age']; ?></td>
                <td><?php echo date("m/d/Y H:i", strtotime($row1['date_register'] . ' + 16 hours')); ?></td>
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
			window.location.href="../dashboard.php";	
				
			});
		</script>
	</body>
</html>


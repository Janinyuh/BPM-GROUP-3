<?php
	require 'Connection/db_conn.php';
	$query = $conn->query("SELECT * FROM `users` WHERE `userID` = '$_SESSION[userID]'") or die(mysqli_error());
	$fetch = $query->fetch_array();
	$Fname3 = $fetch['Fname'];
	$Mname3 = $fetch['Mname'];
	$Lname3 = $fetch['Lname'];
	$purok2 = $fetch['purok'];
	$userID2 = $fetch['userID'];

	
?>
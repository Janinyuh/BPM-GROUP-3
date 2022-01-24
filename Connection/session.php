<?php
	require 'db_conn.php';
	$query = $conn->query("SELECT * FROM `users` WHERE `userID` = '$_SESSION[userID]'") or die(mysqli_error());
	$fetch = $query->fetch_array();
	$barangay = $fetch['barangay'];
	$userID2 = $fetch['userID'];
	$fullname = $fetch['fullname'];
	$role = $fetch['role'];

	
?>
<?php
	require 'db_conn.php';
	$query = $conn->query("SELECT * FROM `borrowers` WHERE `borrowers_id` = '$_SESSION[borrowers_id]'") or die(mysqli_error());
	$fetch = $query->fetch_array();
	$borrowersname = $fetch['name1'];
	$borrowersidnum = $fetch['idnum'];

	
?>
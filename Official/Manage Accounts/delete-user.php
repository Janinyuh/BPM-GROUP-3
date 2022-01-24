<?php 
require_once '../Connection/db_conn.php';

	$sql = "DELETE FROM users WHERE userID = '".$_GET['userID']."'";
	$result = mysqli_query($conn, $sql);
	header("location: Maccounts.php");   //

?>

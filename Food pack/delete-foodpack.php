<?php 
require_once '../Connection/db_conn.php';

	$sql = "DELETE FROM `foodpacks` WHERE `fpackID` = '$_REQUEST[fpackID]'";
	$result = mysqli_query($conn, $sql);
	header("location:Food pack.php");

?>

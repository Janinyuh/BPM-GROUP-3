<?php 
require_once '../Connection/db_conn.php';

	$q = $_GET['quantity'];
	$quan = ($q - 1);
	$sql = "UPDATE `exitpass` SET quantity='$quan',submit='0' WHERE `epassID` = '$_REQUEST[epassID]'";
//	echo $sql;
//	exit();
	$result = mysqli_query($conn, $sql);
	header("location:exitpass.php");

?>

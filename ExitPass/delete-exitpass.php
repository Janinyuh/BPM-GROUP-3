<?php 
require_once '../Connection/db_conn.php';

	$sql = "DELETE FROM `ayuda` WHERE `ayudaID` = '$_REQUEST[ayudaID]'";
	$result = mysqli_query($conn, $sql);
	header("location:ayuda.php");

?>
<?php 
require_once '../Connection/db_conn.php';

	$sql = "DELETE FROM `exitpass` WHERE `epassID` = '$_REQUEST[epassID]'";
	$result = mysqli_query($conn, $sql);
	header("location:exitpass.php");

?>

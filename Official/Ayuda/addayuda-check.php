<?php 
session_start(); 
include "../Connection/db_conn.php";

if (isset($_POST['userID']) && isset($_POST['name2']) && isset($_POST['amount']) && isset($_POST['date_claimed'])){

	$userID = $_POST['userID'];
	$name2 = $_POST['name2'];
	$amount = $_POST['amount'];
	$date_claimed = $_POST['date_claimed'];

	$sql = "INSERT INTO `ayuda` (userID, name2, amount, date_claimed) VALUES('$userID', '$name2', '$amount', '$date_claimed')";
	$result = mysqli_query($conn, $sql);
		header("location: ayuda.php");
	}
?>
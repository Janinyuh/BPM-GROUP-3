<?php 
session_start(); 
include "../Connection/db_conn.php";

if (isset($_POST['userID']) && isset($_POST['amount']) && isset($_POST['date_claimed'])){

	$userID = $_POST['userID'];
	$amount = $_POST['amount'];
	$date_claimed = $_POST['date_claimed'];

	$query = $conn->query("SELECT * FROM `users` WHERE userID = ('$userID');") or die(mysqli_error());
	$fetch = $query->fetch_array();
	$fullname = $fetch['fullname'];

	$sql2 = "INSERT INTO `ayuda` (userID, name2, amount, date_claimed) VALUES('$userID', '$fullname', '$amount', '$date_claimed')";
	$result = mysqli_query($conn, $sql2);
		header("location: ayuda.php");
	}
?>
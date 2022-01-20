<?php 
session_start(); 
include "../Connection/db_conn.php";

if (isset($_POST['userID']) && isset($_POST['quantity']) && isset($_POST['date_claimed'])){

	$userID = $_POST['userID'];
	$quantity = $_POST['quantity'];
	$date_claimed = $_POST['date_claimed'];

	$query = $conn->query("SELECT * FROM `users` WHERE userID = ('$userID');") or die(mysqli_error());
	$fetch = $query->fetch_array();
	$fullname = $fetch['fullname'];
	
	$sql = "INSERT INTO `foodpacks` (userID, name3, quantity, date_claimed) VALUES('$userID', '$fullname', '$quantity', '$date_claimed')";
	$result = mysqli_query($conn, $sql);
		header("location: Food pack.php");
	}
?>
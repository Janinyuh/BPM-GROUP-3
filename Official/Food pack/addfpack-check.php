<?php 
session_start(); 
include "../Connection/db_conn.php";

if (isset($_POST['userID']) && isset($_POST['name3']) && isset($_POST['quantity']) && isset($_POST['date_claimed'])){

	$userID = $_POST['userID'];
	$name3 = $_POST['name3'];
	$quantity = $_POST['quantity'];
	$date_claimed = $_POST['date_claimed'];

	$sql = "INSERT INTO `foodpacks` (userID, name3, quantity, date_claimed) VALUES('$userID', '$name3', '$quantity', '$date_claimed')";
	$result = mysqli_query($conn, $sql);
		header("location: Food pack.php");
	}
?>
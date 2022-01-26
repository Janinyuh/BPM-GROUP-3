<?php 
session_start(); 
require '../Connection/session.php';
include "../Connection/db_conn.php";

if (isset($_POST['userID']) && isset($_POST['quantity']) && isset($_POST['date_toclaim']) && isset($_POST['date_claimed'])){

	$userID = $_POST['userID'];
	$quantity = $_POST['quantity'];
	$barangay = ($barangay);
	$date_toclaim = $_POST['date_toclaim'];
	$date_claimed = $_POST['date_claimed'];

	$query = $conn->query("SELECT * FROM `users` WHERE userID = ('$userID');") or die(mysqli_error());
	$fetch = $query->fetch_array();
	$fullname = $fetch['fullname'];
	
	$sql = "INSERT INTO `foodpacks` (userID, name3, quantity, barangay, date_toclaim, date_claimed) VALUES('$userID', '$fullname', '$quantity', '$barangay', '$date_toclaim' '$date_claimed')";
	$result = mysqli_query($conn, $sql);
		header("location: Food pack.php");
	}
?>
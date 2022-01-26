<?php 

if(ISSET($_POST['edit-ayuda'])){
	$userID = ($_POST['userID']);
	$amount = ($_POST['amount']);
	$date_toclaim = ($_POST['date_toclaim']);
	$date_claimed = ($_POST['date_claimed']);

	$sql = "UPDATE `ayuda` SET `userID` = '$userID', `amount` = '$amount', `date_toclaim` = '$date_toclaim', `date_claimed` = '$date_claimed' WHERE `ayudaID` = '$_REQUEST[ayudaID]'";
	$result = mysqli_query($conn, $sql);
		header("location:ayuda.php");
	}
?>

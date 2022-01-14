<?php 

if(ISSET($_POST['edit-ayuda'])){
	$userID = ($_POST['userID']);
	$name2 = ($_POST['name2']);
	$amount = ($_POST['amount']);
	$date_claimed = ($_POST['date_claimed']);

	$sql = "UPDATE `ayuda` SET `userID` = '$userID', `name2` = '$name2', `amount` = '$amount', `date_claimed` = '$date_claimed' WHERE `ayudaID` = '$_REQUEST[ayudaID]'";
	$result = mysqli_query($conn, $sql);
		header("location:ayuda.php");
	}
?>

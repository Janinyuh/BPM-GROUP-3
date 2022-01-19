<?php 

if(ISSET($_POST['edit-foodpack'])){
	$userID = ($_POST['userID']);
	$name3 = ($_POST['name3']);
	$quantity = ($_POST['quantity']);
	$date_claimed = ($_POST['date_claimed']);

	$sql = "UPDATE `foodpacks` SET `userID` = '$userID', `name3` = '$name3', `quantity` = '$quantity', `date_claimed` = '$date_claimed' WHERE `fpackID` = '$_REQUEST[fpackID]'";
	$result = mysqli_query($conn, $sql);
		header("location:Food pack.php");
	}
?>

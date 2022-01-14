<?php 

if(ISSET($_POST['edit-user'])){
	$Fname = ($_POST['Fname']);
	$Mname = ($_POST['Mname']);
	$Lname = ($_POST['Lname']);
	$age = ($_POST['age']);
	$sex = ($_POST['sex']);
	$purok = ($_POST['purok']);
	$phonenum = ($_POST['phonenum']);

	$sql = "UPDATE `users` SET `Fname` = '$Fname', `Mname` = '$Mname', `Lname` = '$Lname', `age` = '$age', `sex` = '$sex', `purok` = '$purok', `phonenum` = '$phonenum' WHERE `userID` = '$_REQUEST[userID]'";
	$result = mysqli_query($conn, $sql);
		header("location:Maccounts.php");
	}
?>

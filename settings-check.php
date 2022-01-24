<?php

if(ISSET($_POST['submit'])){

	$phonenum = ($_POST['phonenum']);
	$age = ($_POST['age']);
	$newpassword = ($_POST['newpassword']);

	$newpassword = md5($newpassword);

	
	$sql = "UPDATE `users` SET `phonenum` = '$phonenum', `age` = '$age', `password` = '$newpassword' WHERE `userID` = '$_SESSION[userID]'";
	$result = mysqli_query($conn, $sql);
           	header("Location: settings.php?success=Your information has been edited successfully.");
	}
?>

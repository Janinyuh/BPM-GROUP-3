<?php 
session_start(); 
include "Connection/db_conn.php";

if (isset($_POST['submit'])) {

	$userID = $_POST['userID'];
	$Fname = $_POST['Fname'];
	$Mname = $_POST['Mname'];
	$Lname = $_POST['Lname'];
	$purok = $_POST['purok'];
	$phonenum = $_POST['phonenum'];
	$age = $_POST['age'];
	$sex = $_POST['sex'];
    $password = $_POST['password'];
    $repassword = $_POST['repassword'];
   
    if($password !== $repassword){
        header("Location: add account.php?error=The confirmation password does not match&$user_data");
	    exit();
	}

	else{
		// hashing the password
        $password = md5($password);

	    $sql = "SELECT * FROM users WHERE userID='$userID'";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			header("Location: add account.php?error=The User ID is taken. Try another&$user_data");
	        exit();
		}else {
           $sql2 = "INSERT INTO users(userID, Fname, Mname, Lname, purok, phonenum, age, sex, password) VALUES('$userID', '$Fname', '$Mname', '$Lname', '$purok', '$phonenum', '$age', '$sex', '$password')";
           $result2 = mysqli_query($conn, $sql2);
           if ($result2) {
           	 header("Location: add account.php?success=Your account has been created successfully.");
	         exit();
           }else {
	           	header("Location: add account.php?error=unknown error occurred&$user_data");
		        exit();
           }
		}
}

}else{
	header("Location: add account.php");
	exit();
}

<?php 
session_start(); 
include "../Connection/db_conn.php";

if (isset($_POST['submit'])) {

	$Fname = $_POST['Fname'];
	$Mname = $_POST['Mname'];
	$Lname = $_POST['Lname'];
	$age = $_POST['age'];
	$sex = $_POST['sex'];
	$birthday = $_POST['birthday'];
	$purok = $_POST['purok'];
	$barangay = $_POST['barangay'];
	$phonenum = $_POST['phonenum'];
	$userID = $_POST['userID'];
    $password = $_POST['password'];
    $repassword = $_POST['repassword'];
    $spc = ' ';
   
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
           $sql2 = "INSERT INTO users(Fname, Mname, Lname, age, sex, birthday, purok, barangay, phonenum, userID, password, fullname, role) VALUES('$Fname', '$Mname', '$Lname', '$age', '$sex', '$birthday', '$purok', '$barangay', '$phonenum',  '$userID', '$password', '{$Fname}{$spc}{$Mname}{$spc}{$Lname}', 'user')";
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

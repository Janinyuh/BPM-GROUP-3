<?php 
session_start(); 
include "Connection/db_conn.php";

if (isset($_POST['submit'])) {

	$Fname2 = $_POST['Fname2'];
	$Mname2 = $_POST['Mname2'];
	$Lname2 = $_POST['Lname2'];
	$purok3 = $_POST['purok2'];

           $sql2 = "INSERT INTO exitpass (Fname2, Mname2, Lname2, purok2) VALUES('$Fname2', '$Mname2', '$Lname2', '$purok3')";
           $result2 = mysqli_query($conn, $sql2);
           if ($result2) {
           	 header("Location: exitpass.php?success=Your request has been sent successfully.");
	         exit();
           }else {
	           	header("Location: exitpass.php?error=unknown error occurred&$user_data");
		        exit();
           }
		

}else{
	header("Location: exitpass.php");
	exit();
}

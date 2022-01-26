<?php 
session_start(); 
require 'session.php';
include "Connection/db_conn.php";


if (isset($_POST['submit'])) {

	$Fname3 = ($Fname3);
	$Mname3 = ($Mname3);
	$Lname3 = ($Lname3);
	$purok2 = ($purok2);
	$barangay = ($barangay);
	$date_requested = date('Y-m-d');


           $sql2 = "INSERT INTO exitpass (Fname2, Mname2, Lname2, purok2, barangay, date_requested) VALUES('$Fname3', '$Mname3', '$Lname3', '$purok2', '$barangay', '$date_requested')";
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

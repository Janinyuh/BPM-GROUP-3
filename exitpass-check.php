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
    $user_id = $_SESSION['userID'];
    $date_requested = date('Y-m-d');

    $sql3 = "SELECT userID from exitpass WHERE userID=$user_id";
    $result3 = mysqli_query($conn, $sql3);
    $usernameExist = 0;
    if ($data = mysqli_fetch_array($result3)){
        $sql4 = "UPDATE `exitpass` SET submit='1' WHERE `userID` = '$user_id'";
        $result2 = mysqli_query($conn, $sql4);
        header("Location: exitpass.php?success=Your request has been sent successfully.");
        exit();
    }else{
        $sql2 = "INSERT INTO exitpass (userID, Fname2, Mname2, Lname2, purok2, barangay, date_requested,quantity, submit) VALUES('$user_id','$Fname3', '$Mname3', '$Lname3', '$purok2', '$barangay', '$date_requested','2', '1')";
        $result2 = mysqli_query($conn, $sql2);
        if ($result2) {
            header("Location: exitpass.php?success=Your request has been sent successfully.");
            exit();
        }else {
            header("Location: exitpass.php?error=unknown error occurred&$user_data");
            exit();
        }
    }



}else{
    header("Location: exitpass.php");
    exit();
}

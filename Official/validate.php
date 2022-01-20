<?php 
	session_start();
	if(!ISSET($_SESSION['userID'])){
		header("location:../Login/login.php");
	}
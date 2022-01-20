<!DOCTYPE html>
<?php
    require_once '../validate.php';
    require '../session.php';
?>
<html>
<head>
	<meta charset="utf-8">
	<title>Home Page</title>
	<link rel="stylesheet" type="text/css" href="home.css">
</head>
<body>
	<header>
		<div class="log_out">
			<a href="../logout.php" class="logout_btn"><h5>LOG OUT</h5></a>
		</div>
		<div class="title">
			<h5>BARANGAY PANDEMIC MANAGEMENT SYSTEM</h5>
		</div>
		<div class="logobox">
			<img src="logo1.png" class="logo">
		</div>
		
	</header>
	<!-- <div class="sidebar">
		<a href="../home page/home.html"><span>Home</span></a>
		<a href="../Add account/add account.php"><span>Add account</span></a>
		<a href="../ExitPass/exitpass.php"><span>Exit Pass</span></a>
		<a href="../Ayuda/Ayuda.php"><span>Ayuda</span></a>
		<a href="../Food pack/Food pack.php"><span>Food Packs</span></a>
		<a href="../Announcement/announcement.php"><span>Anouncement</span></a>
		<a href="../Manage Accounts/Maccounts.php"><span>Manage Accounts</span></a>
	</div> -->

	<div class="content">
		<div class="Tbuttons">
			<a href="../Add account/add account.php"><button id="acc"><h1>Accounts</h1></button></a>
			<a href="../Announcement/announcement.php"><button id="ann"><h1>Announcements</h1></button></a>
		</div>
		<div class="Bbuttons">
			<a href="../Ayuda/Ayuda.php"><button id="Aepfp"><h1>Ayuda/Exit Pass/Food Pack</h1></button></a>
		</div>
	</div>
</body>
</html>
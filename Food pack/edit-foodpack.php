<!DOCTYPE html>
<?php
	require_once '../Connection/validate.php';
	require '../Connection/session.php';
?>
<html>
<html>
<head>
	<meta charset="utf-8">
	<title>Food Pack</title>
	<link rel="stylesheet" type="text/css" href="Food pack.css">
</head>
<body>
	<header>
		<div class="log_out">
			<a href="../Logout/logout.php" class="logout_btn"><h5>LOG OUT</h5></a>
		</div>
		<div class="title">
			<h5>BARANGAY PANDEMIC MANAGEMENT SYSTEM</h5>
		</div>
		<div class="logobox">
			<img src="logo1.png" class="logo">
		</div>
		
	</header>
	<div class="sidebar">
		<a href="../home page/home.php"><span>Home</span></a>
		<a href="../ExitPass/exitpass.php"><span>Exit Pass</span></a>
		<a href="../Ayuda/Ayuda.php"><span>Ayuda</span></a>
		<a href="../Food pack/Food pack.php" id="main"><span>Food Packs</span></a>
	</div>

	<div class="content">
		<form action="fresult.php" method="get">
		<div class="Cheader">
			<label>Search Bar</label>
			<input type="text" name="search" id="searchbar" placeholder="Input text here!">
			<button type="submit" >Search</button>
		</div>
		</form>
		</p>		
					<?php
						require '../Connection/db_conn.php';
						$query = $conn->query("SELECT * FROM `foodpacks` WHERE `fpackID` = '$_REQUEST[fpackID]'") or die(mysqli_error());
						$fetch = $query->fetch_array();
					?>
		<form method="POST">
		<div class="Add">
			<label>User ID</label>
			<input type = "text" value = "<?php echo $fetch['userID']?>" name = "userID" />
			<label>Name</label>
			<input type = "text" value = "<?php echo $fetch['name3']?>" name = "name3" />
			<label>Quantity</label>
			<input type = "text" value = "<?php echo $fetch['quantity']?>" name = "quantity" />
			<label>Date to Claim</label>
			<input type = "Date" value = "<?php echo $fetch['date_toclaim']?>" name = "date_toclaim" />
			<label>Date Claimed</label>
			<input type = "Date" value = "<?php echo $fetch['date_claimed']?>" name = "date_claimed" />
			<button type="submit" name="edit-foodpack" class="submit">Save</button>
		</div>
		</form>
		<?php require_once 'edit-query-foodpack.php'?>
</body>
</html>
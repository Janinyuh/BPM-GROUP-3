<!DOCTYPE html>
<?php
	require_once '../Connection/validate.php';
	require '../Connection/session.php';
?>
<html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ayuda</title>
	<link rel="stylesheet" type="text/css" href="ayuda.css">
	<link href="https://fonts.googleapis.com/css2?family=Alata&family=Questrial&display=swap" rel="stylesheet">
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
		<a href="../Ayuda/Ayuda.php" id="main"><span>Ayuda</span></a>
		<a href="../Food pack/Food pack.php"><span>Food Packs</span></a>
	</div>

	<div class="content">
		<div class="Cheader">
			<label>Search Bar</label>
			<input type="text" name="searchbar" id="searchbar" placeholder="Input text here!">
			<button>Search</button>
		</div>
		</p>		
					<?php
						require '../Connection/db_conn.php';
						$query = $conn->query("SELECT * FROM `ayuda` WHERE `ayudaID` = '$_REQUEST[ayudaID]'") or die(mysqli_error());
						$fetch = $query->fetch_array();
					?>
		<form method="POST">
		<div class="Add">
			<label>User ID</label>
			<input type = "text" value = "<?php echo $fetch['userID']?>" name = "userID" />
			<label>Amount</label>
			<input type = "text" value = "<?php echo $fetch['amount']?>" name = "amount" />
			<label>Date to Claim</label>
			<input type = "Date" value = "<?php echo $fetch['date_toclaim']?>" name = "date_toclaim" />
			<label>Date Claimed</label>
			<input type = "Date" value = "<?php echo $fetch['date_claimed']?>" name = "date_claimed" />
			<button type="submit" name="edit-ayuda" class="submit">Save</button>
		</div>
		</form>
		<?php require_once 'edit-query-ayuda.php'?>
</body>
</html>
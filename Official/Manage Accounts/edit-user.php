<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Manage Accounts</title>
	<link rel="stylesheet" type="text/css" href="Maccounts.css">
</head>
<body>
	<header>
		<div class="log_out">
			<a href="log_out" class="logout_btn"><h5>LOG OUT</h5></a>
		</div>
		<div class="title">
			<h5>BARANGAY PANDEMIC MANAGEMENT SYSTEM</h5>
		</div>
		<div class="logobox">
			<img src="logo1.png" class="logo">
		</div>
		
	</header>
	<div class="sidebar">
		<a href="../home page/home.html"><span>Home</span></a>
		<a href="../Add account/add account.php"><span>Add account</span></a>
		<a href="../ExitPass/exitpass.php"><span>Exit Pass</span></a>
		<a href="../Ayuda/Ayuda.php"><span>Ayuda</span></a>
		<a href="../Food pack/Food pack.php"><span>Food Packs</span></a>
		<a href="../Announcement/announcement.php"><span>Anouncement</span></a>
		<a href="../Manage Accounts/Maccounts.php"><span>Manage Accounts</span></a>
	</div>

	<div class="content">
		
		</p>		
					<?php
						require '../Connection/db_conn.php';
						$query = $conn->query("SELECT * FROM `users` WHERE `userID` = '$_REQUEST[userID]'") or die(mysqli_error());
						$fetch = $query->fetch_array();
					?>
		<form method="POST">
		<div class="Add">
			<label>First Name</label>
			<input type = "text" value = "<?php echo $fetch['Fname']?>" name = "Fname" />
			<label>Middle Name</label>
			<input type = "text" value = "<?php echo $fetch['Mname']?>" name = "Mname" />
			<label>Last Name</label>
			<input type = "text" value = "<?php echo $fetch['Lname']?>" name = "Lname" /><br><br>
			<label>Age</label>
			<input type = "number" value = "<?php echo $fetch['age']?>" name = "age" min="0" max="200" />
			<label>Sex</label>
			<select required = required name = "sex">
					<option value = "">Sex</option>
					<option value = "male" <?php if($fetch['sex'] == "male"){echo "selected";}?>>Male</option>
					<option value = "female" <?php if($fetch['sex'] == "female"){echo "selected";}?>>Female</option>
			</select>
			<label>Purok</label>
				<select required = required name = "purok">
					<option value = "">All</option>
					<option value = "Purok-1" <?php if($fetch['purok'] == "Purok-1"){echo "selected";}?>>Purok-1</option>
					<option value = "Purok-1A" <?php if($fetch['purok'] == "Purok-1A"){echo "selected";}?>>Purok-1A</option>
					<option value = "Purok-2A" <?php if($fetch['purok'] == "Purok-2A"){echo "selected";}?>>Purok-2A</option>
					<option value = "Purok-2B" <?php if($fetch['purok'] == "Purok-2B"){echo "selected";}?>>Purok-2B</option>
					<option value = "Purok-2C" <?php if($fetch['purok'] == "Purok-2C"){echo "selected";}?>>Purok-2C</option>
					<option value = "Purok-3A" <?php if($fetch['purok'] == "Purok-3A"){echo "selected";}?>>Purok-3A</option>
					<option value = "Purok-3B" <?php if($fetch['purok'] == "Purok-3B"){echo "selected";}?>>Purok-3B</option>
					<option value = "Purok-3C" <?php if($fetch['purok'] == "Purok-3C"){echo "selected";}?>>Purok-3C</option>
					<option value = "Purok-4A" <?php if($fetch['purok'] == "Purok-4A"){echo "selected";}?>>Purok-4A</option>
					<option value = "Purok-4B" <?php if($fetch['purok'] == "Purok-4B"){echo "selected";}?>>Purok-4B</option>
					<option value = "Purok-4C" <?php if($fetch['purok'] == "Purok-4C"){echo "selected";}?>>Purok-4C</option>
					<option value = "Purok-5" <?php if($fetch['purok'] == "Purok-5"){echo "selected";}?>>Purok-5</option>
					<option value = "Purok-6" <?php if($fetch['purok'] == "Purok-6"){echo "selected";}?>>Purok-6</option>
				</select>
			<label>Barangay</label>
				<select required = required name = "barangay">
					<option value = "">All</option>
					<option value = "Gusa" <?php if($fetch['barangay'] == "Gusa"){echo "selected";}?>>Gusa</option>
					<option value = "Agusan" <?php if($fetch['barangay'] == "Agusan"){echo "selected";}?>>Agusan</option>
					<option value = "Bulua" <?php if($fetch['barangay'] == "Bulua"){echo "selected";}?>>Bulua</option>
				</select>
			<label>Phone Number</label>
			<input type = "text" value = "<?php echo $fetch['phonenum']?>" name = "phonenum" />
			<button type="submit" name="edit-user" class="submit">Save</button>
		</div>
		</form>
		<?php require_once 'edit-query-user.php'?>
</body>
</html>
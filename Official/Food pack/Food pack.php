<!DOCTYPE html>
<?php
    require_once '../validate.php';
    require '../session.php';
?>
<html>
<head>
	<meta charset="utf-8">
	<title>Food Pack</title>
	<link rel="stylesheet" type="text/css" href="Food pack.css">
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
		<form action="addfpack-check.php" method="POST">
		<div class="Add">
			<label>User ID</label>
			<input type="text" name="userID" id="userID" placeholder="User ID">
			<label>Quantity</label>
			<input type="text" name="quantity" id="quantity" placeholder="Quantity">
			<label>Date Claimed</label>
			<input type="Date" name="date_claimed" id="date_claimed">
			<button type="submit" name="add-foodpack" class="submit">Add</button>
		</div>
		</form>
		<table class="table1">		
		  <tr>
		  	<th>#</th>
		    <th>Names</th>
		    <th>Quantity</th>
		    <th>Date Claimed</th>
		    <th>Action</th>
		  </tr>
		  <tbody>
					<?php
						require '../Connection/db_conn.php';
						$query = $conn->query("SELECT *  FROM `foodpacks`;") or die(mysqli_error());
						while($fetch = $query->fetch_array()){
					?>
						<tr>
							<td><?php echo $fetch['fpackID']?></td>
							<td><?php echo $fetch['name3']?></td>
							<td><?php echo $fetch['quantity']?></td>
							<td><?php echo $fetch['date_claimed']?></td>
    						<td><center></a><a href = "edit-foodpack.php?fpackID=<?php echo $fetch['fpackID']?>"><i></i><button>Edit</button></a><a onclick = "confirmationDelete(this); return false;" href = "delete-foodpack.php?fpackID=<?php echo $fetch['fpackID']?>"><i></i><button> Delete</button></a></center></td>
  </tr>
 					 <?php
						}
					?>	
					</tbody>
		</table>
	</div>
</body>
<script src = "../js/jquery.js"></script>	
<script type = "text/javascript">
	function confirmationDelete(anchor){
		var conf = confirm("Are you sure you want to delete this record?");
		if(conf){
			window.location = anchor.attr("href");
		}
	} 
</script>
</html>
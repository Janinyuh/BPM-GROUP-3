<!DOCTYPE html>
<html>
<?php
	require_once 'validate.php';
	require 'session.php';
?>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Barangay Pandemic Management System - Ayuda</title>
	<link rel="stylesheet" href="fpack.css">
	<link href="https://fonts.googleapis.com/css2?family=Alata&family=Questrial&display=swap" rel="stylesheet">
</head>

<body>
	<section id="header">
		<div class="header-box">
				<span></span>
				<img src="images/logo1.png" class="logo">
			</div>
	<form action="fresult.php" method="get">
	<div class="wrap">
   <div class="search">
      <input type="text" name="search" class="searchTerm" placeholder="Search">
      <button type="submit" class="searchButton">
     </button>
   </div>
</div>
</form>

		<div class="container">
			<div class="Ayuda">
				<h1>FOOD PACKS</h1>
			</div>

		</div>
	</section>

	<nav id="sideNav">
		<ul>
			<li><a href="dashboard.php">BACK</a></li>
			<li><a href="settings.php">SETTINGS</a></li>
			<li><a href="logout.php">LOGOUT</a></li>
		</ul>
	</nav>
	<img src="images/menu.png" id="menu">

<!-- start table ---->
<div class="container-table">
	<table class="table1">		
  <tr>
    <th>Me</th>
    <th>Quantity</th>
    <th>Date to Claim</th>
    <th>Date Claimed</th>
  </tr>
  <tbody>
					<?php
						require 'Connection/db_conn.php';
						$query = $conn->query("SELECT name3, quantity, date_toclaim, date_claimed FROM `foodpacks` WHERE userID = ('$userID2');") or die(mysqli_error());
						while($fetch = $query->fetch_array()){
					?>
						<tr>
							<td><?php echo $fetch['name3']?></td>
							<td><?php echo $fetch['quantity']?></td>
							<td><?php echo $fetch['date_toclaim']?></td>
							<td><?php echo $fetch['date_claimed']?></td>
						</tr>
					<?php
						}
					?>	
					</tbody>
</table>

<!--other table-->
<h2 id="title2">My Neighbours</h2>
<div class="scrollable">
<table class="table2">
	<tbody>
	 				<th>NAME</th>
					<?php
						require 'Connection/db_conn.php';
						$query = $conn->query("SELECT foodpacks.name3 FROM `foodpacks` WHERE EXISTS (SELECT purok FROM users WHERE userID = foodpacks.userID AND purok = ('$purok2') AND userID != ('$userID2'));") or die(mysqli_error());
						while($fetch = $query->fetch_array()){
					?>
							
						<tr>
							<td><?php echo $fetch['name3']?></td>
						</tr>
					<?php
						}
					?>	
					</tbody>

	

</table>
</div>
</div>
<!-- end table ---->





	<script>
		var menu = document.getElementById("menu");
		var sideNav = document.getElementById("sideNav");

		sideNav.style.right='-250px';
		menu.onclick = function(){
			if(sideNav.style.right=='-250px'){
				sideNav.style.right ="0";
			}
			else{
				sideNav.style.right = "-250px";
			}
		}
	</script>

	<section id="footer">
	<div class="container footer-row">
		<hr>
		<div class="footer-left-col">
			<p>?? The Barangay Pandemic Management System</p>
		</div>
	</div>
</section>

</body>

</html>
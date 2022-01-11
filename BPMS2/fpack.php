<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Barangay Pandemic Management System - Ayuda</title>
	<link rel="stylesheet" href="ayuda.css">
	<link href="https://fonts.googleapis.com/css2?family=Alata&family=Questrial&display=swap" rel="stylesheet">
</head>

<body>
	<section id="header">
		<div class="container">

			<img src="images/logo1.png" class="logo">

			<div class="Ayuda">
				<h1>FOOD PACKS</h1>
			</div>

		</div>
	</section>

	<nav id="sideNav">
		<ul>
			<li><a href="dashboard.html">BACK</a></li>
		</ul>
	</nav>
	<img src="images/menu.png" id="menu">

<!-- start table ---->
	<table class="table1">		
  <tr>
    <th>Names</th>
    <th>Date Claimed</th>
    <th>Action</th>
    
  </tr>
  <tbody>
					<?php
						require 'Connection/db_conn.php';
						$query = $conn->query("SELECT name3, date_claimed  FROM `foodpacks`;") or die(mysqli_error());
						while($fetch = $query->fetch_array()){
					?>
						<tr>
							<td><?php echo $fetch['name3']?></td>
							<td><?php echo $fetch['date_claimed']?></td>
    						<td><center><a href = "edit_item.php?item_id=<?php echo $fetch['item_id']?>"><i></i> Edit</a> <a onclick = "confirmationDelete(this); return false;" href = "delete_item.php?item_id=<?php echo $fetch['item_id']?>"><i></i> Delete</a></center></td>
  </tr>
 					 <?php
						}
					?>	
					</tbody>
</table>



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
			<p>..</p>
		</div>
		<div class="footer-center-col">
			<p>© The Barangay Pandemic Management System</p>
		</div>
	</div>
</section>

</body>

</html>
<!DOCTYPE html>
<?php
	require_once '../Connection/validate.php';
	require '../Connection/session.php';
?>
<html>
<html>
<head>
	<meta charset="utf-8">
	<title>Exit Pass</title>
	<link rel="stylesheet" type="text/css" href="exitpass.css">
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
		<a href="../ExitPass/exitpass.php" id="main"><span>Exit Pass</span></a>
		<a href="../Ayuda/ayuda.php"><span>Ayuda</span></a>
		<a href="../Food pack/Food pack.php"><span>Food Packs</span></a>
	</div>

	<div class="content">
		<form action="eresult.php" method="get">
		<div class="Cheader">
			<label>Search Bar</label>
			<input type="text" name="search" id="searchbar" placeholder="Input text here!">
			<button type="submit" >Search</button>
		</div>
		</form>
		<table class="table1">		
		  <tr>
		  	<th>#</th>
		    <th>First Name</th>
		    <th>Middle Name</th>
		    <th>Last Name</th>
		    <th>Purok</th>
		    <th>Date Requested</th>
		    <th>Quantity</th>
		    <th>Action</th>
		  </tr>
		  <tbody>
					<?php
						require '../Connection/db_conn.php';
						$query = $conn->query("SELECT *  FROM `exitpass`") or die(mysqli_error());
						while($fetch = $query->fetch_array()){
					?>
						<tr>
							<td><?php echo $fetch['epassID']?></td>
							<td><?php echo $fetch['Fname2']?></td>
							<td><?php echo $fetch['Mname2']?></td>
							<td><?php echo $fetch['Lname2']?></td>
							<td><?php echo $fetch['purok2']?></td>
							<td><?php echo $fetch['date_requested']?></td>
                            <td><?php echo $fetch['quantity']?></td>
                            <?php if($fetch['submit'] == 1 && $fetch['quantity'] !=0) { ?>
    						<td style="text-align: center;"></a><a onclick = "confirmationDelete(this); return false;" href = "delete-exitpass.php?epassID=<?php echo $fetch['epassID']?>&quantity=<?php echo $fetch['quantity'] ?>"><i></i><button> Approve</button></a></td>
                            <?php }else{ ?>
                                <td>Approved</td>
                            <?php } ?>
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
		var conf = confirm("Are you sure you want to approve this record?");
		if(conf){
			window.location = anchor.attr("href");
		}
	} 
</script>
</html>
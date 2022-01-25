<!DOCTYPE html>
<?php
	require_once '../Connection/validate.php';
	require '../Connection/session.php';
?>
<html>
<head>
	<meta charset="utf-8">
	<title>Add Account</title>
	<link rel="stylesheet" type="text/css" href="add account.css">
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
		<a href="../Add account/add account.php" id="main"><span>Add Account</span></a>
		<a href="../Manage Accounts/Maccounts.php"><span>Manage Accounts</span></a>
	</div>

	<div class="content">
		<form action="add account-check.php" id="addAccountd" method="POST">
			<h2>Please input the needed details in the fields.</h2>
			<?php if (isset($_GET['error'])) { ?>
        <p class="error"><?php echo $_GET['error']; ?></p>
      <?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>
			<div class="first">
				<label for="Fname">First Name</label>
				<input type="text" name="Fname" id="Fname" required>
			</div>
			<div class="first">
				<label for="Mname">Middle Name</label>
				<input type="text" name="Mname" id="Mname">
			</div>
			<div class="first">
				<label for="Lname">Last Name</label>
				<input type="text" name="Lname" id="Lname" required>
			</div>
			<div class="first">
				<label>Age</label>
				<input type="number" name="age" id="age" min="0" max="200">
			</div>
			<br>
			<br>
			<div>
				<div class="second">
				<label>Sex:</label>
				</div>
				<div class="second">
					<input type="radio" name="sex" id="male" value="male">
					Male
				</div>
				<div class="second">
					<input type="radio" name="sex" id="female" value="female">
					Female
				</div>
			</div>
			<br>
			<br>
			
			<div class="third">
				<div>
				<label for="birthday">Birthday</label>
				<input type="Date" name="birthday" id="birthday">
				</div>
				<div>
				<label for="purok">Purok</label>
				<select name="purok" id="purok">
					<option>All</option>
					<option value="Purok-1">Purok-1</option>
					<option value="Purok-1A">Purok-1A</option>
					<option value="Purok-2A">Purok-2A</option>
					<option value="Purok-2B">Purok-2B</option>
					<option value="Purok-2C">Purok-2C</option>
					<option value="Purok-3A">Purok-3A</option>
					<option value="Purok-3B">Purok-3B</option>
					<option value="Purok-3C">Purok-3C</option>
					<option value="Purok-4A">Purok-4A</option>
					<option value="Purok-4B">Purok-4B</option>
					<option value="Purok-4C">Purok-4C</option>
					<option value="Purok-5">Purok-5</option>
					<option value="Purok-6">Purok-6</option>
				</select>
				</div>
				<div>
				<label for="barangay">Barangay</label>
				<select name="barangay" id="barangay">
					<option>All</option>
					<option value="Gusa">Gusa</option>
					<option value="Agusan">Agusan</option>
					<option value="Bulua">Bulua</option>
				</select>
				</div>
				<div>
					<label for="phonenum">Phone Number</label>
					<input type="text" name="phonenum" id="phonenum">
				</div>
				<div>
				<label for="userID">User ID</label>
				<input type="text" name="userID" id="userID" required>
				</div>
				<div>
					<label for="password">Password</label>
					<input type="password" name="password" id="password">
				</div>
				<div>
					<label for="repassword">Re-Password</label>
					<input type="password" name="repassword" id="repassword">
				</div>
			</div>
			<div class="fourth">
				<button type="reset" name="reset" onclick="resetForm('addAccount'); return false;" class="reset">Reset</button>
				<button type="submit" name="submit" class="submit">Submit</button>
			</div>
		</form>
	</div>


<script type="text/javascript">
   function resetForm(myFormId)
   {
       var myForm = document.getElementById(addAccount);

       for (var i = 0; i < myForm.elements.length; i++)
       {
           if ('submit' != myForm.elements[i].type && 'reset' != myForm.elements[i].type)
           {
               myForm.elements[i].checked = false;
               myForm.elements[i].value = '';
               myForm.elements[i].selectedIndex = 0;
           }
       }
   }
</body>
</html>
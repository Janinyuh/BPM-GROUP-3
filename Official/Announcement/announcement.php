<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Announcements</title>
	<link rel="stylesheet" type="text/css" href="announcement.css">
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
		<form action="" method="POST">
			<h3>Simple Barangay Selection</h3>
			<div>
				<label for="barangay">Barangay</label>
				<select name="barangay" id="barangay">
					<option value="AllB">All</option>
					<option value="Gusa">Gusa</option>
					<option value="Agusan">Agusan</option>
					<option value="Bulua">Bulua</option>
				</select>
			</div>
			<div>
				<label for="ZP">Zone/Purok</label>
				<select name="ZP" id="ZP">
					<option value="AllZP">All</option>
					<option value="zone1">Zone 1</option>
					<option value="zone2">Zone 2</option>
					<option value="zone3">Zone 3</option>
					<option value="zone4">Zone 4</option>
					<option value="zone5">Zone 5</option>
					<option value="zone6">Zone 6</option>
					<option value="zone7">Zone 7</option>
					<option value="zone8">Zone 8</option>
					<option value="zone9">Zone 9</option>
					<option value="zone10">Zone 10</option>
					<option value="zone11">Zone 11</option>
					<option value="zone12">Zone 12</option>
					<option value="zone13">Zone 13</option>
					<option value="zone14">Zone 14</option>
					<option value="zone15">Zone 15</option>
					<option value="zone16">Zone 16</option>
					<option value="zone17">Zone 17</option>
					<option value="zone18">Zone 18</option>
					<option value="zone19">Zone 19</option>
					<option value="zone20">Zone 20</option>
				</select>
			</div>
			<div>
				<label for="announcment">Announcement</label>
				<textarea name="announcment" id="announcment"></textarea>
			</div>
			<h3>Multiple Barangay Selection</h3>
			<p>Note: Press "ctrl" + select the barangays and zones you want to disseminate announcements to.</p>
			<div>
				<label for="Mbarangay">Barangay</label>
				<select name="Mbarangay" id="Mbarangay" multiple>
					<option value="AllB">All</option>
					<option value="Gusa">Gusa</option>
					<option value="Agusan">Agusan</option>
					<option value="Bulua">Bulua</option>
				</select>
			</div>
			<div>
				<label for="MZP">Zone/Purok</label>
				<select name="MZP" id="MZP" multiple>
					<option value="AllZP">All</option>
					<option value="zone1">Zone 1</option>
					<option value="zone2">Zone 2</option>
					<option value="zone3">Zone 3</option>
					<option value="zone4">Zone 4</option>
					<option value="zone5">Zone 5</option>
					<option value="zone6">Zone 6</option>
					<option value="zone7">Zone 7</option>
					<option value="zone8">Zone 8</option>
					<option value="zone9">Zone 9</option>
					<option value="zone10">Zone 10</option>
					<option value="zone11">Zone 11</option>
					<option value="zone12">Zone 12</option>
					<option value="zone13">Zone 13</option>
					<option value="zone14">Zone 14</option>
					<option value="zone15">Zone 15</option>
					<option value="zone16">Zone 16</option>
					<option value="zone17">Zone 17</option>
					<option value="zone18">Zone 18</option>
					<option value="zone19">Zone 19</option>
					<option value="zone20">Zone 20</option>
				</select>
			</div>
			<div>
				<label for="announcment2">Announcement</label>
				<textarea name="announcment2" id="announcment2"></textarea>
			</div>
			<button type="reset">Reset</button>
			<button type="submit">Submit</button>
		</form>
	</div>
</body>
</html>
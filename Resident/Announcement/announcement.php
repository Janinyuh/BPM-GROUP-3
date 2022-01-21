<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Announcements</title>
	<link rel="stylesheet" type="text/css" href="announcement.css">
	<link href="https://fonts.googleapis.com/css2?family=Alata&family=Questrial&display=swap" rel="stylesheet">
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
		<a href="../Announcement/announcement.php" id="main"><span>Anouncement</span></a>
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
					<option value="Purok 1">Purok 1</option>
					<option value="Purok 2">Purok 2</option>
					<option value="Purok 3">Purok 3</option>
					<option value="Purok 4">Purok 4</option>
					<option value="Purok 5">Purok 5</option>
					<option value="Purok 6">Purok 6</option>
					<option value="Purok 7">Purok 7</option>
					<option value="Purok 8">Purok 8</option>
					<option value="Purok 9">Purok 9</option>
					<option value="Purok 10">Purok 10</option>
					<option value="Purok 11">Purok 11</option>
					<option value="Purok 12">Purok 12</option>
					<option value="Purok 13">Purok 13</option>
					<option value="Purok 14">Purok 14</option>
					<option value="Purok 15">Purok 15</option>
					<option value="Purok 16">Purok 16</option>
					<option value="Purok 17">Purok 17</option>
					<option value="Purok 18">Purok 18</option>
					<option value="Purok 19">Purok 19</option>
					<option value="Purok 20">Purok 20</option>
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
					<option value="Purok 1">Purok 1</option>
					<option value="Purok 2">Purok 2</option>
					<option value="Purok 3">Purok 3</option>
					<option value="Purok 4">Purok 4</option>
					<option value="Purok 5">Purok 5</option>
					<option value="Purok 6">Purok 6</option>
					<option value="Purok 7">Purok 7</option>
					<option value="Purok 8">Purok 8</option>
					<option value="Purok 9">Purok 9</option>
					<option value="Purok 10">Purok 10</option>
					<option value="Purok 11">Purok 11</option>
					<option value="Purok 12">Purok 12</option>
					<option value="Purok 13">Purok 13</option>
					<option value="Purok 14">Purok 14</option>
					<option value="Purok 15">Purok 15</option>
					<option value="Purok 16">Purok 16</option>
					<option value="Purok 17">Purok 17</option>
					<option value="Purok 18">Purok 18</option>
					<option value="Purok 19">Purok 19</option>
					<option value="Purok 20">Purok 20</option>
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
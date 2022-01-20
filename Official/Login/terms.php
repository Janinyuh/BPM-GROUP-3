<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Barangay Pandemic Management System</title>
	<link rel="stylesheet" href="terms.css">
	<link href="https://fonts.googleapis.com/css2?family=Alata&family=Questrial&display=swap" rel="stylesheet">
</head>

<body>
	<section id="header">
		<div class="container">
			<img src="logo1.png" class="logo">
		</div>
		<div class = "header-text">
			<h1>Terms and Conditions</h1>
				<!-- long message -->
	<div class="terms">
		<p>These Terms and Conditions constitute a legally binding agreement made between you, whether personally or on behalf of an entity (“you”) and [business entity name] (“we,” “us” or “our”), concerning your access to and use of the [website name.com] website as well as any other media form, media channel, mobile website or mobile application related, linked, or otherwise connected thereto (collectively, the “Site”). <br><br>

		You agree that by accessing the Site, you have read, understood, and agree to be bound by all of these Terms and Conditions. <br><br>If you do not agree with all of these Terms and Conditions, then you are expressly prohibited from using the Site and you must discontinue use immediately.<br><br>

		Supplemental terms and conditions or documents that may be posted on the Site from time to time are hereby expressly incorporated herein by reference. <br><br>We reserve the right, in our sole discretion, to make changes or modifications to these Terms and Conditions at any time and for any reason.</p>
	</div>
			
				
		</div>

	</section>

	<nav id="sideNav">
		<ul>
			<li><a href="login.php">BACK</a></li>
		</ul>
	</nav>
	<img src="menu.png" id="menu">

	


<section id="footer">
	<div class="container footer-row">
		<hr>
		<div class="footer-left-col">
			<p>All Rights Reserved</p>
		</div>
		<div class="footer-right-col">
			<p>© The Barangay Pandemic Management System</p>
		</div>
	</div>
</section>





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
</body>

</html>
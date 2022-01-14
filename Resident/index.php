<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Barangay Pandemic Management System</title>
	<link rel="stylesheet" href="index.css">
	<link href="https://fonts.googleapis.com/css2?family=Alata&family=Questrial&display=swap" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
</head>

<body>
	<section id="header">
		<div class="container">
			<img src="images/logo1.png" class="logo">
		</div>
		<div class = "header-text">
			<h1>The Barangay <br> 
			Pandemic Management</h1>
				
			<p>This website helps you manage,  
				<br>facilitate announcements 
				and <br>needs in your own barangay.</p>	

				<button class="login-btn" onclick="document.location='login.php'">LOGIN</button>	
		</div>

	</section>

	<nav id="sideNav">
		<ul>
			<li><a href="#header">HOME</a></li>
			<li><a href="#about">ABOUT</a></li>
		</ul>
	</nav>
	<img src="images/menu.png" id="menu">


<!--about-->
	
	<section id="about">
		<div class="about-text">
			<h1>About Us</h1>
			<h2>We're More Than Just A Website!</h2>
			<p>This project is to serve the community regarding to the pandemic.</p>
		</div>
	</section>

	<article class="flow">
  <div class="team">
    <ul class="auto-grid" role="list">
      
      <li>
        <a  target="_blank" class="profile">
          <h2 class="profile__name">Janina Briones</h2>
          <p>Founder</p>
          <img alt="Janina Briones" src="images/janina.jpg" />
        </a>
      </li>

      <li>
        <a  target="_blank" class="profile">
          <h2 class="profile__name">Rhegie Ayag</h2>
          <p>Creative Director</p>
          <img alt="Rhegie Ayag" src="images/rhegie.jpg" />
        </a>
      </li>

      <li>
        <a  target="_blank" class="profile">
          <h2 class="profile__name">Julianne Bajao</h2>
          <p>Technical Lead</p>
          <img alt="Julianne Bajao" src="images/julie.jpg" />
        </a>
      </li>

      <li>
        <a  target="_blank" class="profile">
          <h2 class="profile__name">Jinomel Fajardo</h2>
          <p>Designer</p>
          <img alt="Jinomel Fajardo" src="images/jinomel.jpg" />
        </a>
      </li>

      <li>
        <a  target="_blank" class="profile">
          <h2 class="profile__name">Ryle Glema</h2>
          <p>Developer</p>
          <img alt="Ryle Glema" src="images/ryle.jpg" />
        </a>
      </li>

      <li>
        <a  target="_blank" class="profile">
          <h2 class="profile__name">Laurence Ligan</h2>
          <p>Developer</p>
          <img alt="Laurence Ligan" src="images/laurence.jpg" />
        </a>
      </li>

    </ul>
  </div>
</article>

<section id="footer">
	<div class="container footer-row">
		<hr>
		<div class="footer-left-col">
			<p>..</p>
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
		var scroll = new SmoothScroll('a[href*="#"]', {
			speed: 1000,
	speedAsDuration: true
		});
	</script>


</body>

</html>
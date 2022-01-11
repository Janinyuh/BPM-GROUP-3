<!DOCTYPE html>

<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Barangay Pandemic Management System</title>
    <link rel="stylesheet" href="login.css">
    <link href="https://fonts.googleapis.com/css2?family=Alata&family=Questrial&display=swap" rel="stylesheet">
</head>

<body>
   
    <div class="container">
    <!-- code here -->
    <div class="card">
        <div class="card-image">    
            <h2 class="card-heading">
                Welcome!
                <small>We are here to serve <br>the community</small>
            </h2>
        </div>
        <form class="card-form" action="login-check.php" method="post">
            <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>
            <div class="input">
                <input type="text" name="userID" class="input-field" required/>
                <label class="input-label">User ID</label>
            </div>
                        <div class="input">
                <input type="password" name="password" class="input-field" required/>
                <label class="input-label">Password</label>
            </div>
            <div class="action">
                <button name="submit"class="action-button">LOGIN</button>
            </div>
        </form>
        <div class="card-info">
            <p>By signing up you are agreeing to our <a href="terms.html">Terms and Conditions</a></p>
        </div>
    </div>
</div>

    <nav id="sideNav">
        <ul>
            <li><a href="index.php">HOME</a></li>
        </ul>
    </nav>
    <img src="images/menu.png" id="menu">

<section id="footer">
    <div class="container footer-row">
        <hr>
        <div class="footer-left-col">
             <section id="header">
        <div class="container">
            <img src="images/logo1.png" class="logo">
        </div>
    </section>
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


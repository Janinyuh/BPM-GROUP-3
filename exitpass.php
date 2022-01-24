<!DOCTYPE html>
<?php
    require_once 'validate.php';
    require 'session.php';
?>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Barangay Pandemic Management System</title>
    <link rel="stylesheet" href="exit.css">
    <link href="https://fonts.googleapis.com/css2?family=Alata&family=Questrial&display=swap" rel="stylesheet">
</head>

<body>
     <div class="header-box">
            <span></span>
            <img src="images/logo1.png" class="logo">
            <div class="Ayuda">
                <h1>EXIT PASS</h1>
            </div>
        </div>
    <div class="container">
    <!-- code here -->
    <div class="card">
        <div class="card-image">    
            <h2 class="card-heading">
                Exit Pass
                <small>Make a <br>request here.</small>
            </h2>
        </div>
        <?php if (isset($_GET['error'])) { ?>
        <p class="error"><?php echo $_GET['error']; ?></p>
      <?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>
        <form class="card-form" action="exitpass-check.php" method="POST">
            <div class="input">
                <input type="text" name="Fname2" class="input-field" required/>
                <label class="input-label">First Name</label>
            </div>
                        <div class="input">
                <input type="text" name="Mname2" class="input-field" required/>
                <label class="input-label">Middle Name</label>
            </div>
            <div class="input">
                <input type="text" name="Lname2" class="input-field" required/>
                <label class="input-label">Last Name</label>
            </div>
            <div class="input">
                <input type="text" name="purok2" class="input-field" required/>
                <label class="input-label">Purok</label>
            </div>
            <div class="action">
                <input name= "submit" type="submit" class="action-button" value="SUBMIT">
                
            </div>
        </form>
        <div class="card-info">
            <p>Please note that we are short on staffs so it may take awhile to process your request</p>
        </div>
    </div>
</div>

    <nav id="sideNav">
        <ul>
            <li><a href="dashboard.php">BACK</a></li>
            <li><a href="settings.php">SETTINGS</a></li>
            <li><a href="logout.php">LOGOUT</a></li>
        </ul>
    </nav>
    <img src="images/menu.png" id="menu">

<section id="footer">
    <div class="container footer-row">
        <hr>
        <div class="footer-left-col">
            <p>© The Barangay Pandemic Management System</p>
             
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
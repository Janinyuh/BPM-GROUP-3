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
    <link rel="stylesheet" href="settings.css">
    <link href="https://fonts.googleapis.com/css2?family=Alata&family=Questrial&display=swap" rel="stylesheet">
</head>

<body>
    <div class="header-box">
            <span></span>
            <img src="images/logo1.png" class="logo">
            <div class="Ayuda">
                <h1>SETTINGS</h1>
            </div>
        </div>
    <div class="container">
    <!-- code here -->
    <div class="card">
        <div class="card-image">    
            <h2 class="card-heading">
                Welcome to SETTINGS
                <small>Edit your <br>Profile here</small>
            </h2>
        </div>
        <?php if (isset($_GET['error'])) { ?>
        <p class="error"><?php echo $_GET['error']; ?></p>
      <?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>

        <?php
                        $query = $conn->query("SELECT * FROM `users` WHERE `userID` = '$_SESSION[userID]'") or die(mysqli_error());
                        $fetch = $query->fetch_array();
                    ?>
                    
        <form  method="POST" class="card-form" >
        <div class="message"><?php if(isset($message)) { echo $message; } ?></div>
            <div>
            <label>User ID: </label><label><?php echo $userID2?></td></label><br>
            <label>Name: </label><label><?php echo $fullname?></td></label><br><br>
            </div>
            <div class="input">
                <input type="text" value = "<?php echo $fetch['phonenum']?>" name="phonenum" class="input-field" required/>
                <label class="input-label">Phone Number</label>
            </div>
            <div class="input">
                <input type="date" value = "<?php echo $fetch['birthday']?>" name="birthday" class="input-field" required/>
                <label class="input-label">Birthday</label>
            </div>
                <div class="input">
                <input type="text" value = "<?php echo $fetch['age']?>" name="age" class="input-field" required/>
                <label class="input-label">Age</label>
            </div>
            <div class="input">
                <input type="text" name="newpassword" class="input-field" required/>
                <label class="input-label">New Password</label>
            </div>
            <div class="action">
                <input type="submit" name="submit" class="action-button" value="SAVE">
            </div>
        </form>
        <?php require_once 'settings-check.php'?>

        <div class="card-info">
            <p>Thank You for using our website!</p>
        </div>
    </div>
</div>

    <nav id="sideNav">
        <ul>
            <li><a href="dashboard.php">BACK</a></li>
            <li><a href="logout.php">LOGOUT</a></li>
        </ul>
    </nav>
    <img src="images/menu.png" id="menu">

<section id="footer">
    <div class="container footer-row">
        <hr>
        <div class="footer-left-col">
            <p>?? The Barangay Pandemic Management System</p>
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
